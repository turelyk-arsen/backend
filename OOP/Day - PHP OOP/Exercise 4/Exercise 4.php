<?php

/*
EXERCISE 4

Step 1 :
You work for a bank.
As part of the site redesign, you must create a BankAccount() class which will have the following
private properties:
- an account number
- an amount

Make the getters / setters to validate the data type above as well as the constructor allowing to
instantiate the class.

Add two methods:
● Withdraw: Withdraw is possible on the account at any time. The withdraw operation checks if
you have enough money on the bank account (amount).
● Deposit: The deposit is possible at any time. The deposit is the addition of an amount to the
account

Step 2 :
You can choose between two account types : create an account to save money or a professional
account.
Create the matching classes using inheritance.

SavingAccount() will have an ‘interest’ property that is defined at the creation of the bank
account. It will also have a method to retrieve the current interest of the bank account.
For example: if you have an interest of 0.012 and 500€ on your bank account, your interest is
0.012*500€.

ProfessionalAccount() will allow you to withdraw even if the amount is negative.
Instead, it has a ‘limit’ property. This limit has to be defined when creating the bank account.
For example: if you have a limit of 500, it means you can withdraw up to -500€ (0 is not the limit).

Part 3 :
In a new file, instantiate the class so that you can display 2 different bank accounts (one
SavingAccount and one ProfesionalAccount).

For the 2 accounts, try to withdraw money until it is no longer possible using a loop and the
previously created functions (withdraw).

*/