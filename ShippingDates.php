<?php

namespace Jh\Shipping;
/**
 * Class ShippingDates
 * @package Jh\Shipping
 */
class ShippingDates implements ShippingDatesInterface
{
	public $date = strftime(); //This brings up the date and time of the order and will store it ideally for an SQL database
	public $orderReceivedDate = date('N', strtotime("wednesday")); //Allows date to be read as an integer 
	public $dispatched = "Prepare to dispatch";
	public $delivered = ();
	public $delay = "Dispatch Monday";

	public calculateDeliveryDate()
	{
	if ($orderReceivedDate <=5){ //If the order is received before Friday then it will print the order to dispath
		echo $date, " " ,$dispatched 

		}else ($date >= 5){ //If order is received after friday then a delay for monday will be printed
			echo $date, " " ,$delay
		}
/* In a full solution the class will be linked to an SQL database where orders will be stored to dispatch on Monday or to be dispatched immediately all containing the order details.*/   
      ?>
