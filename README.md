# e-shop

Appsolve is a website that provides technology instruction guides, to fix Software and computer-related problems. This application has major features such as user authentication with social media accounts such as GitHub;Customer newsletter subscription. This application has an Administrator dashboard through which all applications' resources are managed. This application has its own rich text editor for content editting.



## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

We recommend you to visit this YouTube Channel and follow the Laravel Development Enviroment set-up series.<p align="left"><a href="https://www.youtube.com/watch?v=nwJ71v_Npp8&list=PL2Q-5sYPVXz2b_sFmsI2TkQCYTA7nDVIN" >Laravel development Enviroment Set-up Tutorial</a></p> 

### Prerequisites

What things you need to install the software and how to install them:

1. Composer
Download link:
<p align="left"><a href="https://getcomposer.org/download/" >Download Composer</a></p>
2. Git
Download link:
<p align="left"><a href="https://git-scm.com/downloads" >Download Git</a></p>

3. Node.js
<p align="left"><a href="https://nodejs.org/en/download/" >Download Node.js</a></p>

4. Localhost server
 <p> You can get localhost server of your choice in Bitnami. </p>

5. Text editor (example. Visual studio code)
<p align="left"><a href="https://code.visualstudio.com/download" >Download Visual Studio Code</a></p>

6. Git Desktop 
<p align="left"><a href="https://desktop.github.com/" >Download Git Desktop For windows or mac Os</a></p>
<p align="left"><a href="https://aur.archlinux.org/packages/github-desktop/" >Download Git Desktop For Linux</a></p>



### Installing

A step by step series of examples that tell you how to get a development env running

1. Install Your local serve. Find the local server installation procedure for your operating system.

2. Install visual studio Code in your operating system.

3. Install git Desktop.
 Git will request for your GitHub credentials. Signin to your GitHub account with the GitHub desktop.  
4. Install Composer and set command-line php.
 
```
for example in windows the path for your command-line php will be
Installation Directory/php/php.exe
where installation Directory will be the path to where local server is installed.
for example
C:\Bitnami\wampstack-7.4.9-0/php/php.exe
```
5. Install Git and also install the Git Bash.

6. Install Node.js

7. Downloading/cloning the project Files from GitHub.
 <ol type="I">
  <li> Open Your Git Desktop.</li>
  <li> At the top left of Git Desktop Click The File Option 
  on the Toolbar and select the clone repository from the dropdown menu to launch the clone
  repository dialog pop-up.</li>
  <li> Select Url Option. </li>
 
  ```
  enter the repository url as
  https://github.com/JohnyIrush/e-shop.git
  then set the local path as 
  Installation Directory/framewoks/ 
  ```
  <li>Click clone and wait for the cloning process to finish</li>
  <li>Click Open in Visual Studio Code Option under Open the repository in your external editor.</li>
 </ol>
8. Set up the Project in Visual Studio code
 <ol type="I">
 <li>Set bash as the default shell. Click terminal at the main toolbar, then select new terminal from  the dropdown menu.</li>
 <li>Select bash as default shell. At the top left of the new terminal window just before the big  Plus sign click the down arrow. click select default shell to launch the installed shells list pop  up. At the top click select Git Bash.</li>
 </ol>
9. Install the Project Composer packages and Nodejs packages
<ol type="I">
In your shell Run the following commands
<li>Composer packages: composer install </li>
<li>Nodejs packages: npm install</li>
</ol>
10. Set The application Database
 <ol type="I">
  <li>Create a database </li>
  <li>Create a file called .env and copy all the contents of .env.example into the .env file</li>
  <li>Enter the Database credentials  </li>
 </ol>
 11. Genarate Application key.
  in your shell run 
  php artisan key:generate


## Running the application
Run the following command to launch e-shop

```
php artisan serve
```

## Deployment



## Built With

* [Laravel](https://laravel.com/docs/7.x/installation) - The web framework used
* [Vue js](https://vuejs.org) - The web framework used
* [Bootstrap](https://getbootstrap.com) - The web framework used
* [jQuery](https://jquery.com) - The web framework used
* [Composer](https://getcomposer.org) - Laravel Dependency Management
* [npm](https://www.npmjs.com) - Vue js Dependency Management

## Contributing



## Authors

* **John Irungu ** - *Initial work* 

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments



