<?php

/**
 * CodeIgniter NO Captcha ReCAPTCHA a.k.a reCAPTCHA Version 2.0 library
 * 
 * This library is based on official sewania library for PHP
 * https://github.com/project_sewa
 * 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class CartSewania {

	/**
	 * These are the regular expression rules that we use to validate the product ID and product name
	 * alpha-numeric, dashes, underscores, or periods
	 *
	 * @var string
	 */
	public $product_id_rules = '0-9';

	/**
	 * Reference to CodeIgniter instance
	 *
	 * @var object
	 */
	protected $CI;

	/**
	 * Contents of the cart
	 *
	 * @var array
	 */
	protected $_cart_contents = array();

	public function __construct($params = array())
	{
		// Set the super object to a local variable for use later
		$this->CI =& get_instance();

		// Are any config settings being passed manually?  If so, set them
		$config = is_array($params) ? $params : array();

		// Load the Sessions class
		$this->CI->load->driver('session', $config);

		// Grab the shopping cart array from the session table
		$this->_cart_contents = $this->CI->session->userdata('carts_sewania');
		if ($this->_cart_contents === NULL)
		{
			// No cart exists so we'll set some base values
			$this->_cart_contents = array('cart_total' => 0, 'total_items' => 0);
		}

		log_message('info', 'Cart Class Initialized');
	}

	/**
	 * Insert items into the cart and save it to the session table
	 *
	 * @param	array
	 * @return	bool
	 */
	public function insert($items = array())
	{
		// Was any cart data passed? No? Bah...
		if ( ! is_array($items) OR count($items) === 0)
		{
			log_message('error', 'The insert method must be passed an array containing data.');
			return FALSE;
		}

		// You can either insert a single product using a one-dimensional array,
		// or multiple products using a multi-dimensional one. The way we
		// determine the array type is by looking for a required array key named "id"
		// at the top level. If it's not found, we will assume it's a multi-dimensional array.

		$save_cart = FALSE;
		if (isset($items['id']))
		{
			if (($rowid = $this->_insert($items)))
			{
				$save_cart = TRUE;
			}
		}
		else
		{
			foreach ($items as $val)
			{
				if (is_array($val) && isset($val['id']))
				{
					if ($this->_insert($val))
					{
						$save_cart = TRUE;
					}
				}
			}
		}

		// Save the cart data if the insert was successful
		if ($save_cart === TRUE)
		{
			$this->_save_cart();
			return isset($rowid) ? $rowid : TRUE;
		}

		return FALSE;
	}

	// --------------------------------------------------------------------

	/**
	 * Insert
	 *
	 * @param	array
	 * @return	bool
	 */
	protected function _insert($items = array())
	{
		// Was any cart data passed? No? Bah...
		if ( ! is_array($items) OR count($items) === 0)
		{
			log_message('error', 'The insert method must be passed an array containing data.');
			return FALSE;
		}

		// --------------------------------------------------------------------

		// Does the $items array contain an id, quantity, price, and name?  These are required
		if ( ! isset($items['id'], $items['telp'], $items['acara'], $items['tamu'], $items['alamat'], $items['start_acara'], $items['end_acara'], $items['des_acara']))
		{
			log_message('error', 'The cart array must contain a product ID, quantity, price, and name.');
			return FALSE;
		}

		// --------------------------------------------------------------------

		// Validate the product ID. It can only be alpha-numeric, dashes, underscores or periods
		// Not totally sure we should impose this rule, but it seems prudent to standardize IDs.
		// Note: These can be user-specified by setting the $this->product_id_rules variable.
		if ( ! preg_match('/^['.$this->product_id_rules.']+$/i', $items['id']))
		{
			log_message('error', 'Invalid product ID.  The product ID can only contain alpha-numeric characters, dashes, and underscores');
			return FALSE;
		}

		// We now need to create a unique identifier for the item being inserted into the cart.
		// Every time something is added to the cart it is stored in the master cart array.
		// Each row in the cart array, however, must have a unique index that identifies not only
		// a particular product, but makes it possible to store identical products with different options.
		// For example, what if someone buys two identical t-shirts (same product ID), but in
		// different sizes?  The product ID (and other attributes, like the name) will be identical for
		// both sizes because it's the same shirt. The only difference will be the size.
		// Internally, we need to treat identical submissions, but with different options, as a unique product.
		// Our solution is to convert the options array to a string and MD5 it along with the product ID.
		// This becomes the unique "row ID"
		if (isset($items['options']) && count($items['options']) > 0)
		{
			$rowid = md5($items['id'].serialize($items['options']));
		}
		else
		{
			// No options were submitted so we simply MD5 the product ID.
			// Technically, we don't need to MD5 the ID in this case, but it makes
			// sense to standardize the format of array indexes for both conditions
			$rowid = md5($items['id']);
		}

		// --------------------------------------------------------------------

		// Now that we have our unique "row ID", we'll add our cart items to the master array
		// grab quantity if it's already there and add it on
		$old_quantity = isset($this->_cart_contents[$rowid]['qty']) ? (int) $this->_cart_contents[$rowid]['qty'] : 0;

		// Re-create the entry, just to make sure our index contains only the data from this submission
		$items['rowid'] = $rowid;
		$items['qty'] += $old_quantity;
		$this->_cart_contents[$rowid] = $items;

		return $rowid;
	}

	// --------------------------------------------------------------------

	/**
	 * Cart Contents
	 *
	 * Returns the entire cart array
	 *
	 * @param	bool
	 * @return	array
	 */
	public function contents($newest_first = FALSE)
	{
		// do we want the newest first?
		$cart = ($newest_first) ? array_reverse($this->_cart_contents) : $this->_cart_contents;

		// Remove these so they don't create a problem when showing the cart table
		unset($cart['total_items']);
		unset($cart['cart_total']);

		return $cart;
	}

}