# Civil Hospital Management System
Civil Hospital Management System using MySQL, Php and Bootstrap 

You can contact CHMS: (048) 9230764.

## Need to work on:

1. Ability to accept the appointment by the doctor to acknowledge the patient that their appointment has been approved.
2. User should not be allowed to register if he/she tries to provide the already registered email ID.
3. The password should be encrypted and the password field shouldn't be displayed in the admin panel.
4. Chatbot will provide ease to patients to get a doctor according to their disease.
5. Addition of more details on payment - such as date of the payment made, amount paid, etc.
6. Reports delivery via email.

## Prerequisites
1. Install XAMPP web server
2. Any Editor (Preferably VS Code or Sublime Text)
3. Any web browser with latest version

## Languages and Technologies used
1. HTML5/CSS3
2. JavaScript (to create dynamically updating content)
3. Bootstrap (An HTML, CSS, and JS library)
4. XAMPP (A web server by Apache Friends)
5. Php
6. MySQL (An RDBMS that uses SQL)
7. Python (to build chatBot)

## Steps to run the project in your machine
1. Download and install XAMPP in your machine
2. Clone or download the repository
3. Extract all the files and move it to the 'htdocs' folder of your XAMPP directory.
4. Start the Apache and Mysql in your XAMPP control panel.
5. Open your web browser and type 'localhost/phpmyadmin'
6. In phpmyadmin page, create a new database from the left panel and name it as 'mychmsdb'
7. Import the file 'doctor_appointment.sql_2.zip' inside your newly created database and click ok.
8. Open a new tab and type 'localhost/foldername' in the url of your browser
9. Hurray! That's it!

### SOFTWARES USED
  - XAMPP was installed on the Ubuntu 19.04 machine and APACHE2 Server and MySQL were initialized. And, files were built inside opt/lampp/htdocs/myhmsp 
  - For windows xampp files were built inside the folder htdocs (C:\xampp\htdocs for standard installations).
  - Sublime Text 3.2 was used as a text editor.( Download link: https://www.sublimetext.com/download)
  - Google Chrome Version 77.0.3865.90 was used to run the project (localhost/myhmsp was used as the url).

### Starting Apache And MySQL in XAMPP:
  The XAMPP Control Panel allows you to manually start and stop Apache and MySQL. To start Apache or MySQL manually, click the ‘Start’ button under ‘Actions’.
  link: https://www.apachefriends.org/download.html
  
  
<p align="center"><img src="https://user-images.githubusercontent.com/36665975/59350977-fcc68900-8d3a-11e9-9450-e5c478497caa.png"></img></p>


### GETTING INTO THE PROJECT:
Civil Hospital Management System in php and mysql. This system has a ‘Home’ page from where the patient, doctor & administrator can login into their accounts by toggling the tabs accordingly. Fig 1.1 shows the ‘Home’ page of our project.
![login](https://user-images.githubusercontent.com/96255306/156760276-2469f07f-7868-4dc8-8234-b066d13c7798.PNG)

'About Us' page (Fig 1.2)  allows us to get some more information about the quality and the services of the hospital.
![about us](https://user-images.githubusercontent.com/96255306/156760353-48459500-e3a9-4e49-91be-3d8a1c3f108f.PNG)


‘Contact’ page allows users to provide feedback or queries about the services of the hospital. Fig 1.3 shows the ‘Contact’ page.

![contact us](https://user-images.githubusercontent.com/96255306/156760380-4cda7144-64ba-4f5c-b266-d8c4a613f55d.PNG)

The ‘login’ page consists of 3 modules:
1. Patient Module
2. Doctor Module
3. Admin Module

### Patient Module:

  &nbsp; &nbsp; &nbsp; This module allows patients to create their account, book an appointment to see a doctor and see their appointment history.
  The registration page(in the home page itself) asks patients to enter their First Name, Last Name, Email ID, Contact Number, Password and radio buttons to select their gender.
  
  ![register](https://user-images.githubusercontent.com/96255306/156760527-8609aa60-8e19-47f0-af8a-94842fe4c86d.PNG)


Once the patient has created his/her own account after clicking the ‘Register’ button, then he will be redirected to his/her Dashboard(Fig 1.5).
![p dasboard](https://user-images.githubusercontent.com/96255306/156760556-4f971557-9553-400c-bcda-1229505d60c7.PNG)


The Dashboard page allows patients to perform two operations:

**1. Book his/her appointment:**

  &nbsp; &nbsp; &nbsp; Here, the patients can able to book their appointments to see a doctor. The appointment form(Fig 1.6) requires patients to select the doctor that they want to see, Date and Time that they want to meet with the doctor. The consultancy fee will be shown accordingly to the patient as it was already determined by the doctor.

![book apointment](https://user-images.githubusercontent.com/96255306/156760623-1f05471e-a6cd-46b7-9714-c750a407331a.PNG)

After clicking on the ‘Create new entry’ button, the patient will receive an alert that acknowledges the successful appointment of the patient


**2. View patients’ Appointment History:**

  &nbsp; &nbsp; &nbsp; Here, the patient can see their appointment history which contains Doctor Name, Appointment Date and Time.(See Fig 1.8).
	
![p dasboard](https://user-images.githubusercontent.com/96255306/156760799-44afd282-cca4-4c61-9fc7-092b891bb0e4.PNG)




Once the patient has logged out of his account, if he wants to go into his account again, he can login his account, instead of register his account again.

### Doctor Module:

  &nbsp; &nbsp; &nbsp; The doctors can login into their account which can be done by toggling the tab from ‘Patient’ to ‘Doctor’. Fig 1.10 shows the login form for a doctor. Registration of a doctor account can be done only by admin. We will discuss more about this in Admin Module.
  

![login](https://user-images.githubusercontent.com/96255306/156761016-92e75e2d-f081-477e-a556-591d1e5084fd.PNG)


Once the doctor clicking the ‘Login’ button, they will be redirected to their own dashboard which is shown in Fig 1.11

![doc dashborad](https://user-images.githubusercontent.com/96255306/156761046-1e35285c-d009-4fbb-a138-338b238383ee.PNG)



In this page, doctor can able to see their appointments which has been booked by the patients. Fig 1.12 shows the appointment of the doctor ‘Ganesh’ which has been booked by the patient ‘Kenny Sebastian’ (Fig 1.6). This means that the doctor ‘Ganesh’ will have an appointment with the patient ‘Nusrat Shah’ on 10-10-2019 10AM. 

![doc p appoint](https://user-images.githubusercontent.com/96255306/156761143-d42aa982-accc-4ff9-8971-0925098614d9.PNG)


In real-time, the doctors will have thousands of appointments. It will be easier for a doctor to search for appointment in the case of more appointments. To make it easier, I have a ‘Search’ box in the navigation bar which allows doctors to search for a patient by their contact number.
&nbsp; &nbsp; &nbsp; Once everything is done, the doctor can logout of their account. Thus, in general, a doctor can login into his/her account, view their appointments and search for a patient. This is all about Doctor Module.

### Admin Module:
   
   &nbsp; &nbsp; &nbsp; This module is the heart of our project where an admin can see the list of all patients. Doctors and appointments and the feedback/queries received from the ‘Contact’ page. Also admin can add doctor too. 
  &nbsp; &nbsp; &nbsp; Login into admin account can be done by toggling into admin tab of the Home page. Fig 1.13 shows the login page for admin.
  &nbsp; &nbsp; &nbsp; `username`: johnsmith@gmail.com, `Password`: password

![login](https://user-images.githubusercontent.com/96255306/156761246-edf12fb2-0a60-41aa-8553-aa9e3fc0ac82.PNG)


On clicking the ‘Login’ button, the admin will be redirected to his/her dashboard as shown in 
Fig 1.14.
![admin dash](https://user-images.githubusercontent.com/96255306/156761416-a3615fd2-6fbe-4dfd-868f-32a1a0ea626c.PNG)


This module allows admin to perform following major operations:

**1. View the list of all patients registered:**

  &nbsp; &nbsp; &nbsp; Admin can able to view all the patients registered. This includes the patients’ First Name, Last Name, Email ID, Contact Number and Password. .As like in doctor module, admin can also search for a patient by their name in the search box.
  ![admin p detail](https://user-images.githubusercontent.com/96255306/156762720-9253232e-b151-4750-8547-602d3cc90971.PNG)

  
**2. View the list of all doctors registered:**

  &nbsp; &nbsp; &nbsp; Details of the doctors can also be viewed by the admin. This details include the Name of the doctor, Password, Email  Searching for a doctor can be done by using the doctor’s name in the search box.


**3. View the Appointment lists:**

  &nbsp; &nbsp; &nbsp; Admin can also able to see the entire details of the appointment that shows the appointment details of the patients with their respective doctors. This includes the First Name, Last Name, Email and Contact Number of patients, doctor’s name, Appointment Date, Time a
  
  
**4. Add Doctor:**

  &nbsp; &nbsp; &nbsp; Admin  can add a new doctor . This form asks Doctor’s Name, Email ID, Password 
  
  
  ![add  doc](https://user-images.githubusercontent.com/96255306/156762666-6db4d9b7-2198-4b6a-96ad-ec06b940a382.PNG)

  After adding a new doctor, if we check the doctor’s list, we will see the details of new doctor is added to the list
  
  
<!-- **5. View User’s feedback/Queries:**

  &nbsp; &nbsp; &nbsp; Admin is allowed to view the feedback/Query that has been given by the user in the ‘Contact’ page (Refer Fig 1.3). This includes User’s Name, Email Id, Contact Number and the message(Feedback/ Query)  -->
  
  
  &nbsp; &nbsp; &nbsp; Taking everything into consideration, admin can able to view the details of patients and doctors, appointment details, Feedback by the user and can add a new doctor. Once everything is done, the admin can logout from his account.

## Updates

### 1. Cancel Appointments
	
   &nbsp; &nbsp; &nbsp; Patients and doctors can able to delete their appointments.
 
    
  If the patient deletes the last record (for doctor Ganesh), then a label "deleted by you" will be displayed in the column 'Current Status' and the action will change to cancel state.  
  
  Similarly doctors can also delete their appointments and patients can view their updated appointment details.
  
### 2. Remove Doctors by Admin

&nbsp; &nbsp; &nbsp; Admin can also delete the doctors from the system. This let admin to have more control over the system.

  

### ChatBot:

Patients or users will be able to get a doctor after telling their syptoms or disease to chatbot.
