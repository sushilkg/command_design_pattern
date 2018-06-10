# zenrooms
Refactoring the sample code provided.

###### What's this?
This repo contains an implementation of Command Design Pattern for the provided code that lies in `doRefactor.php`.
The entry point for the refactored implementation is in `didRefactor.php`.

###### Setup
This project uses composer to autoload files, so make sure to run `composer install`.  I've also written
 couple of basic tests that passes but certainly that can be improved.


###### What's wrong with the original code?
Instead of being closed for modification and open for extension, it only encouraged that. That not only made it harder and troublesome for even any trivial changes, but also error prone and harder to add anything additional.
And it seems that this controller alone is trying to do all things at once. And not in a best way.
The separate components (Items) like Product, Customer, Contact each should have their own responsible controllers that can take care of them.
That way if we need to modify anything regarding that component only, we can do in the relevant part without touching it - but that's not the case here.

###### How is this better?
I've implemented a Command Design Pattern to the provided code and refactored/implemented the base controllers/model accordingly.
1. Now different components of the provided code lies in their respective places that do not interfere with the other. So it is highly decoupled.
2. New actions can be easily added without much alteration to the existing code - the only place that needs changing is in the ApiController where we define which action means what command/controller.
3. Different part of the code now represent the MVC structure instead of jamming all into the controller.
4. Actual usage of this implementation is now only limited to few lines of code as shown in `didRefactor.php` that doesn't needs to change ever.  

###### Why command pattern?
Because from the switch case provided in the original code, it was evident that there we'll need to add lots of 
other $_GET['case'] to handle many such actions. In order to keep using $_GET['case'] yet be as much as closed to modification and open to extension,
command pattern seemed to be a perfect fit. We can also go for Factory pattern but I believe this is better fit for our purpose.

###### What else can be done?
We can improve the code to a lot more extent on many fronts still - such as using libraries to achieve the Database/Log functionality, we don't need to reinvent those. Similarly, the manual
handling of the $_GET & $_POST can be taken care of by Request and Response from the http-foundation libraries. Tests can be improved to increase the code coverage. The models Customer/Product etc could define their members/properties and that could improve other parts. Etc.