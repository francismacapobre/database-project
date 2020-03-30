<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 5.0.1
 */

/**
 * Database `MarketPlace`
 */

/* `MarketPlace`.`completesservicerequest` */
$completesservicerequest = array(
  array('ServiceRequestID' => '1','specifications' => NULL,'DueDate' => '2020-05-06','CustomerID' => '3','ServiceProviderID' => '1','TransactionID' => '2003'),
  array('ServiceRequestID' => '2','specifications' => 'rushed','DueDate' => '2020-03-01','CustomerID' => '2','ServiceProviderID' => '5','TransactionID' => '2001'),
  array('ServiceRequestID' => '3','specifications' => 'background color - blue','DueDate' => '2020-04-28','CustomerID' => '1','ServiceProviderID' => '3','TransactionID' => '2000'),
  array('ServiceRequestID' => '4','specifications' => NULL,'DueDate' => '2020-03-11','CustomerID' => '4','ServiceProviderID' => '2','TransactionID' => '2002'),
  array('ServiceRequestID' => '5','specifications' => 'put a smiley face at the end','DueDate' => '2020-07-15','CustomerID' => '5','ServiceProviderID' => '3','TransactionID' => '2004')
);

/* `MarketPlace`.`customer1` */
$customer1 = array(
  array('customerID' => '1','username' => 'annkim','cardNumber' => '4532584649503748'),
  array('customerID' => '2','username' => 'k.rink','cardNumber' => '8347362649658305'),
  array('customerID' => '3','username' => 'edc','cardNumber' => '3749526475820746'),
  array('customerID' => '4','username' => 'paul.k','cardNumber' => '9685743664857483'),
  array('customerID' => '5','username' => 'li_tse','cardNumber' => '4534485746490283')
);

/* `MarketPlace`.`Customer2` */
$Customer2 = array(
  array('cardNumber' => '3749526475820746','billingAddress' => '5460 Northbrook Mall','name' => 'Edward Chang'),
  array('cardNumber' => '4532584649503748','billingAddress' => '2231 Wesbrook Mall','name' => 'Ann Kim'),
  array('cardNumber' => '4534485746490283','billingAddress' => '1200 Agronomy Road','name' => 'Li Tse'),
  array('cardNumber' => '8347362649658305','billingAddress' => '8900 Eastbrook Mall','name' => 'Katy Rink'),
  array('cardNumber' => '9685743664857483','billingAddress' => '3400 Southbrook Mall','name' => 'Paul Kim')
);

/* `MarketPlace`.`DoesNotComplete` */
$DoesNotComplete = array(
  array('ServiceProviderID' => '1','ServiceRequestID' => '1','Reason' => 'cancelled'),
  array('ServiceProviderID' => '3','ServiceRequestID' => '3','Reason' => 'cancelled'),
  array('ServiceProviderID' => '3','ServiceRequestID' => '4','Reason' => 'cancelled'),
  array('ServiceProviderID' => '5','ServiceRequestID' => '2','Reason' => 'cancelled'),
  array('ServiceProviderID' => '5','ServiceRequestID' => '5','Reason' => 'postponed')
);

/* `MarketPlace`.`EquipmentUses` */
$EquipmentUses = array(
  array('EquipmentID' => '90','ServiceID' => '1','EquipmentName' => 'Camera'),
  array('EquipmentID' => '91','ServiceID' => '1','EquipmentName' => 'Lens'),
  array('EquipmentID' => '92','ServiceID' => '2','EquipmentName' => 'Lawn Mower'),
  array('EquipmentID' => '93','ServiceID' => '3','EquipmentName' => 'Laptop'),
  array('EquipmentID' => '94','ServiceID' => '4','EquipmentName' => 'Safety Goggles')
);

/* `MarketPlace`.`IncompletedServicesReassigns` */
$IncompletedServicesReassigns = array(
  array('OriginalServiceID' => '7','SupervisorID' => '3000'),
  array('OriginalServiceID' => '9','SupervisorID' => '3001'),
  array('OriginalServiceID' => '10','SupervisorID' => '3001'),
  array('OriginalServiceID' => '8','SupervisorID' => '3002'),
  array('OriginalServiceID' => '11','SupervisorID' => '3002')
);

/* `MarketPlace`.`Manages` */
$Manages = array(
  array('ServiceRequestID' => '1','SupervisorID' => '3000','CurrentStatus' => 'In Progress'),
  array('ServiceRequestID' => '2','SupervisorID' => '3000','CurrentStatus' => 'Completed'),
  array('ServiceRequestID' => '3','SupervisorID' => '3001','CurrentStatus' => 'LATE'),
  array('ServiceRequestID' => '4','SupervisorID' => '3002','CurrentStatus' => 'Processing Payment'),
  array('ServiceRequestID' => '5','SupervisorID' => '3001','CurrentStatus' => 'In Progress')
);

/* `MarketPlace`.`ProvidedService1` */
$ProvidedService1 = array(
  array('ServiceID' => '1','ServiceProviderID' => '1'),
  array('ServiceID' => '2','ServiceProviderID' => '1'),
  array('ServiceID' => '3','ServiceProviderID' => '2'),
  array('ServiceID' => '4','ServiceProviderID' => '3'),
  array('ServiceID' => '5','ServiceProviderID' => '4')
);

/* `MarketPlace`.`ProvidedService2` */
$ProvidedService2 = array(
  array('ServiceProviderID' => '1','ServiceType' => 'lawn mowing','Duration' => '200','Price' => '45'),
  array('ServiceProviderID' => '1','ServiceType' => 'web design','Duration' => '120','Price' => '70'),
  array('ServiceProviderID' => '2','ServiceType' => 'essay writing','Duration' => '90','Price' => '99.99'),
  array('ServiceProviderID' => '3','ServiceType' => 'web design','Duration' => '160','Price' => '65'),
  array('ServiceProviderID' => '4','ServiceType' => 'translationByPara','Duration' => '30','Price' => '10'),
  array('ServiceProviderID' => '5','ServiceType' => 'video editingPerMin','Duration' => '10','Price' => '20')
);

/* `MarketPlace`.`RequestCustomerTransactionDetail` */
$RequestCustomerTransactionDetail = array(
  array('transactionID' => '2000','customerID' => '1'),
  array('transactionID' => '2001','customerID' => '2'),
  array('transactionID' => '2002','customerID' => '4'),
  array('transactionID' => '2003','customerID' => '3'),
  array('transactionID' => '2004','customerID' => '5')
);

/* `MarketPlace`.`review` */
$review = array(
  array('RevieweeID' => '4','ReviewerID' => '2','Rating' => '4','comment' => NULL),
  array('RevieweeID' => '1','ReviewerID' => '3','Rating' => '1','comment' => 'BAD SERVICE!'),
  array('RevieweeID' => '5','ReviewerID' => '3','Rating' => NULL,'comment' => 'decent'),
  array('RevieweeID' => '3','ReviewerID' => '4','Rating' => '5','comment' => 'Great Job'),
  array('RevieweeID' => '2','ReviewerID' => '5','Rating' => '2','comment' => 'Terrible, never again!')
);

/* `MarketPlace`.`ServiceProvider` */
$ServiceProvider = array(
  array('ServiceProviderID' => '1','name' => 'Larry Hook','BankAccount' => '3001','LanguageSpoken' => 'english'),
  array('ServiceProviderID' => '2','name' => 'Mariam Lamar','BankAccount' => '2123','LanguageSpoken' => 'english'),
  array('ServiceProviderID' => '3','name' => 'Inca Lee','BankAccount' => '4921','LanguageSpoken' => 'english'),
  array('ServiceProviderID' => '4','name' => NULL,'BankAccount' => '3005','LanguageSpoken' => 'chinese'),
  array('ServiceProviderID' => '5','name' => 'Charles Sakimoto','BankAccount' => '1900','LanguageSpoken' => 'english')
);

/* `MarketPlace`.`Supervisor` */
$Supervisor = array(
  array('SupervisorID' => '3000','ServiceRequestID' => '1'),
  array('SupervisorID' => '3001','ServiceRequestID' => '2'),
  array('SupervisorID' => '3002','ServiceRequestID' => '3'),
  array('SupervisorID' => '3003','ServiceRequestID' => '4'),
  array('SupervisorID' => '3004','ServiceRequestID' => '5')
);

/* `MarketPlace`.`TransactionDetail` */
$TransactionDetail = array(
  array('TransactionID' => '2000','CustomerID' => '1','ProviderID' => '3','ServiceType' => 'web design','Daterequested' => '2020-01-24'),
  array('TransactionID' => '2001','CustomerID' => '2','ProviderID' => '2','ServiceType' => 'translation','Daterequested' => '2019-12-13'),
  array('TransactionID' => '2002','CustomerID' => '4','ProviderID' => '1','ServiceType' => 'essay writing','Daterequested' => '2019-02-10'),
  array('TransactionID' => '2003','CustomerID' => '3','ProviderID' => '1','ServiceType' => 'lawn mowing','Daterequested' => '2020-07-23'),
  array('TransactionID' => '2004','CustomerID' => '5','ProviderID' => '3','ServiceType' => 'web design','Daterequested' => '2019-10-21')
);

/* `MarketPlace`.`WritesForCustomer` */
$WritesForCustomer = array(
  array('ServiceRequestID' => '1','customerID' => '3'),
  array('ServiceRequestID' => '2','customerID' => '2'),
  array('ServiceRequestID' => '3','customerID' => '1'),
  array('ServiceRequestID' => '4','customerID' => '4'),
  array('ServiceRequestID' => '5','customerID' => '5')
);

/* `MarketPlace`.`WritesForServiceProvider` */
$WritesForServiceProvider = array(
  array('ServiceRequestID' => '1','ServiceProviderID' => '1'),
  array('ServiceRequestID' => '2','ServiceProviderID' => '5'),
  array('ServiceRequestID' => '3','ServiceProviderID' => '3'),
  array('ServiceRequestID' => '4','ServiceProviderID' => '2'),
  array('ServiceRequestID' => '5','ServiceProviderID' => '3')
);
