<?php
if ( ! class_exists( 'TribeEventsTicketObject' ) ) {
	/**
	 *    Generic object to hold information about a single ticket
	 */
	class TribeEventsTicketObject {
		/**
		 * This value - an empty string - should be used to populate the stock
		 * property in situations where no limit has been placed on stock
		 * levels.
		 */
		const UNLIMITED_STOCK = '';

		/**
		 * Unique identifier
		 * @var
		 */
		public $ID;
		/**
		 * Name of the ticket
		 * @var string
		 */
		public $name;

		/**
		 * Free text with a description of the ticket
		 * @var string
		 */
		public $description;

		/**
		 * Price, without any sign. Just a float.
		 * @var float
		 */
		public $price;

		/**
		 * Link to the admin edit screen for this ticket in the provider system,
		 * or null if the provider doesn't have any way to edit the ticket.
		 * @var string
		 */
		public $admin_link;

		/**
		 * Link to the front end of this ticket, if the providers has single view
		 * for this ticket.
		 * @var string
		 */
		public $frontend_link;

		/**
		 * Class name of the provider handling this ticket
		 * @var
		 */
		public $provider_class;

		/**
		 * Amount of tickets of this kind in stock
		 * @var mixed
		 */
		public $stock;

		/**
		 * Amount of tickets of this kind sold
		 * @var int
		 */
		public $qty_sold;

		/**
		 * Number of tickets for which an order has been placed but not confirmed or "completed".
		 *
		 * @var int
		 */
		public $qty_pending = 0;

		/**
		 * When the ticket should be put on sale
		 * @var
		 */
		public $start_date;

		/**
		 * When the ticket should be stop being sold
		 * @var
		 */
		public $end_date;

		/**
		 * Whether the ticket will affect a global stock or not.
		 *
		 * @var bool
		 */
		public $global_stock_use;

		/**
		 * The amount of the affected global stock.
		 *
		 * @var int|string Either an int or the UNLIMITED_STOCK constant.
		 */
		public $global_stock_value;

		/**
		 * The amount of a ticket stock taking the global stock into account.
		 *
		 * A ticket not affecting a global stock will store its stock value,
		 * a ticket affecting a global stock will store the minimum between
		 * the global stock and the ticket own stock.
		 * If a ticket has a stock of 20 and the global stock is 100 then this
		 * value will be 20; if a ticket has a stock of 20 and the global stock
		 * is 10 then this value will be 10.
		 * If one value is unlimited this value will be the integer one, smaller
		 * by definition.
		 * If both values are unlimited then this value will be UNLIMITED_STOCK.
		 *
		 * @var int|string Either an int or the UNLIMITED_STOCK constant.
		 */
		public $global_stock_wise_value;

	}
}