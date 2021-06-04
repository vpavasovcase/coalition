# Coalition code test: Laravel app

## Installation

Install Docker Desktop, unzip, cd to folder,

`alias sail='bash vendor/bin/sail'`

Copy .env file,

`cp .env.example .env`

Run the container:

`sail up -d`

Install dependencies from the container:

`sail composer update`

Install node modules :

`sail npm install`

Mix asset watcher:

`sail npm run watch`

You can then run the site at http://localhost .
