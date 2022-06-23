# MoodTrack

A diary application for tracking and improving your mood.

## 1. Download
Download Homestead VM:

    vagrant box add laravel/homestead

Clone the moostrack repository:

    git clone https://github.com/stellaSaronja/MoodTrack.git moodtrack

## 2. Setup
Generate a ssh key:

    ssh-keygen -t rsa -b 4096 -C "your@email.com"

Edit your Homestead.yaml file to fit your paths:

    authorize: ~/.ssh/id_rsa.pub

    keys:
    - ~/.ssh/id_rsa

    folders:
    - map: ~/sae-laravel
      to: /home/vagrant/code/sae-laravel

    sites:
    - map: sae-project.local
      to: /home/vagrant/code/sae-laravel/public

Open your hosts file:

    //Mac/Linux
    sudo nano /etc/hosts

    //Windows
    C:\Windows\System32\Drivers\etc

Then add the dns entry for the site:
    
    192.168.56.56   moodtrack.local

Start the VM:

    cd homestead
    vagrant up

Login to the VM:

    vagrant ssh
    cd code/sae-laravel

Copy the .env file:

    cp .env.example .env

Install composer dependencies:

    composer install

Generate Laravel app key:

    php artisan key:generate

Open localhost:80 in your browser
