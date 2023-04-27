# Profile Website
Hi, I'm Denio! I'm currently taking Web Programming course in BINUS University. For my first Laravel project, I'm making a professional profile website.
## Requirements
There are some technologies that are used in this websites:
1. Laravel (PHP Framework)
2. Bootstrap (CSS Framework)
3. HTML/CSS
4. Javascript
5. NPM (Node Package Manager)
6. Github & Git

And here's the instruction on how to run this website in you computer:
1. Make sure that you have installed laravel and npm. The installation guide for laravel can be found <a href="https://laravel.com/docs/8.x/installation">here</a>. While the installation guide for NPM can be found <a href="https://docs.npmjs.com/downloading-and-installing-node-js-and-npm">here</a>.
2. Make sure that you have installed Git on your computer and have it connected to your GitHub. the installation guide for Git can be found <a href="https://git-scm.com/book/en/v2/Getting-Started-Installing-Git">here</a>
3. Find my project URL in this page by clicking Code > Copy. Or you could as well copy this link right away: https://github.com/DenioPranatha/SL1.git
4. Open your command prompt, and change your directory to the folder that you want by typing cd <your-directory>
    ![tutor 1](https://github.com/DenioPranatha/SL1/blob/master/public/img/tutor1.png)
5. Type   ```git clone https://github.com/DenioPranatha/SL1.git``` to clone the project
    ![tutor 2](https://github.com/DenioPranatha/SL1/blob/master/public/img/tutor2.png)
6. Type ```cd SL1```to get in the project. We will install all the requirements now.
    ![tutor 3](https://github.com/DenioPranatha/SL1/blob/master/public/img/tutor3.png)
7. Type ```composer install``` for our further package manager
    ![tutor 4](https://github.com/DenioPranatha/SL1/blob/master/public/img/tutor4.png)
8. Type ```copy .env.example .env``` to copy the .env file. It is necessary because the Github file ignores .env from my real project so you habe to copy one with this command.
    ![tutor 5](https://github.com/DenioPranatha/SL1/blob/master/public/img/tutor5.png)
9. Type ```php artisan key:generate``` to generate random string for apps encription and decription. It's quite a difficult term but we dont need to understand it that deep.
    ![tutor 6](https://github.com/DenioPranatha/SL1/blob/master/public/img/tutor6.png)
10. Type ```npm install``` to install the Node Package Manager
    ![tutor 7](https://github.com/DenioPranatha/SL1/blob/master/public/img/tutor7.png)
11. Type ```npm install bootstrap@v5.2.3``` for our CSS Framweork. It carries some css classes that are neccessary to build the current website
    ![tutor 8](https://github.com/DenioPranatha/SL1/blob/master/public/img/tutor8.png)
12. Type ```npm run dev``` to prepare the environment
    ![tutor 9](https://github.com/DenioPranatha/SL1/blob/master/public/img/tutor9.png)
13. Open another command line, go to the projects directory by typing cd <your-directory>, and then type php artisan serve
    ![tutor 10](https://github.com/DenioPranatha/SL1/blob/master/public/img/tutor10.png)
14. The website can be accessed in the given link
    
    
## Website view

### Profile
The profile's directory is at http://127.0.0.1:8000/profile. This section shows:
1. General overview that has my picture, name, what I do, and my personal motto because it feels nice to have it
2. Short description to let the viewer knows what my character, my skill, and what I do
3. Portfolio, consist of 3 categories: My achievement, organizational activity, and past projects. It is clickable and showed in carousel. If you click the card. You will be directed to achievement detail page
4. Skills, to show my technical ability specifically
5. Organization involvement shown in logo to keep it simple and attractive 
![view 1](https://github.com/DenioPranatha/SL1/blob/master/public/img/screenshot1.png)
![view 2](https://github.com/DenioPranatha/SL1/blob/master/public/img/screenshot2.png)
![view 3](https://github.com/DenioPranatha/SL1/blob/master/public/img/screenshot3.png)
![view 4](https://github.com/DenioPranatha/SL1/blob/master/public/img/s4.png)
![view 5](https://github.com/DenioPranatha/SL1/blob/master/public/img/s5.png)
![view 6](https://github.com/DenioPranatha/SL1/blob/master/public/img/s6.png)

### Portfolio detail
This page contains the portfolio card that was clicked before plus the detailed explanation. All of that is kept simple in the same-toned interface. If the user wants to go back to the profile, I also provide the link to go back in the bottom of the page. 
![view 7](https://github.com/DenioPranatha/SL1/blob/master/public/img/detail1.png)
![view 8](https://github.com/DenioPranatha/SL1/blob/master/public/img/detail2.png)
![view 9](https://github.com/DenioPranatha/SL1/blob/master/public/img/detail3.png)

### On-progress page
Now because there are another section in the navbar that I haven't worked on yet(we're just focusing on the profile), I find that it's nice to have a notification page like this to guide the user to our main section.
![view 10](https://github.com/DenioPranatha/SL1/blob/master/public/img/wip1.png)
![view 11](https://github.com/DenioPranatha/SL1/blob/master/public/img/detail3.png)


The website also contains animation, but it couldn't be captured here so here is the link of the web view video: 
https://drive.google.com/file/d/1N2LkDjWdESEAadTmC81TobPXSgJm5dYi/view?usp=sharing 



There you have it! See you again in the next project ^^

Name: I Putu Denio Pranatha Ramananda
Student ID: 2502040493
Class: PPTI 12
