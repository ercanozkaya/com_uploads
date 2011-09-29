This component is a proof of concept for demonstrating container feature of com_files.

Using containers, you can create your own com_files instance from any directory you want.

Installation
============
You will find an SQL file in administrator/components/com_uploads/install/install.sql.

Run the SQL command in it and then access the component in the backend. 

What It Shows
============

Complete File Manager
---------------------
In the default layout, complete file manager user interface is rendered through an HMVC call for the custom container.

Upload Form
-----------
In the upload layout, there is a simple upload form. This file is processed in the upload controller by using an HMVC call to com_files.