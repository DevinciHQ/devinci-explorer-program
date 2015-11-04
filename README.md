# PHP and Behat for BDD

## Setup

### Installation

You should install docker and docker-compose.  If you have OSX, then you can install docker-machine as well.
http://docs.docker.com/

Also install ahoy https://github.com/devinci-code/ahoy

Clone our devinci-explorer-program repository into your folder to work in, and checkout behat branch.

```
git clone git@github.com:devinci-code/devinci-explorer-program.git
git fetch
git checkout behat
```

### Fork and PR

You'll want to save your changes to your own account. First, fork our devinci-explorer-program repo (at top of page), and add as remote.
You can get the url for your forked repo by going to it's page and copy the link in the 'Clone Url' box.

`git remote add <name> <your forked repo url>`

Create a new local branch from the behat branch before making changes: `git checkout -b <name of branch>`

Make changes and commits on the new branch.

```
git add <files>
git commit -m "<message>"
git push -u <your repo> <name of branch>
```

### Virtual Hosts

Set-up our hosts file with our container's virtual host. For 127.0.0.1 ip, add the docker-compose VIRTUAL_HOST. (explorer-test.docker)

`sudo vim /etc/hosts`

And add the following (if 127.0.0.1 has a line, just append explorer-test.docker to it):

127.0.0.1   explorer-test.docker

### Docker 

Run `ahoy ps` to check your containers, you should have none up. You should set-up your containers and proxy now.

```
ahoy proxy-up
ahoy up
ahoy ps
```

You should see a list of the web, browser, and cli containers.

### Behat Init

We need to initialize behat.

`ahoy behat-init`

## Running Tests

To run all tests:
`ahoy behat`

To run a specific feature:
`ahoy behat features/<name.feature>`

### Features

Features, which behat runs, are in located in tests/features/  

Specify a feature with its relative path in tests (features/name of feature)

Features have steps, can be custom made in FeatureContext.

### Debug Steps

Then print current URL - gives path currently on
Then print last response - gives html page currently on

## Assignments

Make changes to your php code and update the tests accordingly.

Create subdirectories inside the src/ folder, and place an index.php in each for that specific testing example. 

Example: src/forloop/index.php , with a for loop inside the index.php

You can access the different subdirs by adding the folder path

Example: http://explorer-test.docker/forloop     to access forloop/index.php

### Current Time

1. Make subdir 'time' in src.
2. Create index.php file that prints current datetime.
3. Write a step function to check that the current date is on the page.
4. Write feature file using new step.

### HTML Embedded

1. Make subdir 'html' in src.
2. Create index.php with embedded html (echo '<html>', etc)
3. Write feature file testing to see different element of page.

### Links

1. Make subdir 'links' in src, with it's own subdirs of 'one', 'two', 'three'.
2. Create index.php in links/ that contains <a> elements that point to each subdir.
3. Create index.php in each subdir with a different output (one, two, three).
4. Write feature file testing to follow each link and expect certain output.

### URL Argument

1. Make subdir 'url-arg' in src
2. Create index.php in url-arg/ that checks the current url for any parameters (ex. ?name="bob" )
3. Change output of page depending on parameter.
4. Write feature file testing that arguments are being used properly.

## Docs to read

Behat - 			http://docs.behat.org/en/latest/
Drupal-Behat extension - 	http://behat-drupal-extension.readthedocs.org/en/3.1/drivers.html
PHP -				http://php.net/docs.php

