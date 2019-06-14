** Primary info**

It is result code for Junior test v2.2.pdf .
Author : Aleksandrs Sipkevics
Email  : hr.sipkevics@gmail.com

---

## Task description: 
 The expected outcome is  2 separate pages for:
 1) product list 2) product add 
 
 
1. Product list should list all existing product and details, like:
a. SKU ​(unique for each product) 
b. Name 
c. Price Also each product type has special attribute
2. Product add page should display a form, with following fields 
a. SKU 
b. Name 
c. Price 
d. Type switcher (buttons for each type) e. Special attribute [please note: the form should be dynamically changed when type is switched] 
 

---

## Assignments

Data base : MySql
Db name : test
Db table : sku
Db username (used) : root
Db pass (used in project) : '' [none]

Login/pass could be defined in config file (Config/config.php)

Data base dump exists in : db_dump/sku.sql 

## Project Structure

1 - Entrance point : index .php 
1.1 - Including Config file
1.2 - Setting Registry , Route .
// Registry - global vars
// Route - Define Controllers, Model .
1.3 Start route (delegate method)
2.'Delegate' method Inside Route . 
2.1 Start Controller and Method (
3.Controllers method starts view (page) .



