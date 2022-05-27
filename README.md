# External Link Fieldtype for Statamic 3

## Wanna learn Statamic?
Visit my newest project Statamictutorials.com. Many tutorials are free.
[<img src="https://statamictutorials.com/images/seo/statamictutorials.png" width="600" />](https://statamictutorials.com)

## Description
This is a simple Fieldtype for Statamic 3, created to handle links. 

<img src="https://github.com/jonassiewertsen/Link-fieldtype/blob/master/link_fieldtype.png?raw=true" alt="Statamic Link Fieldtype">

## What can it do?

- It does add a test me button to the field, so you can instantly test if the link is correct
- It will prepend https:// to the url to make sure, that the url is working correctly if inserted on the page as a link
- It will remove http and replace it with https, so that you can be sure to have only secure links on your site

This fieldtype is especially helpful, in case you do work with very long links. One case could be ticket sales links, which tend to be very long. 

## Installation 

This Fieldtype works with **Statamic 3** only!

Install it via the composer command
```
composer require jonassiewertsen/statamic-external-link
```

Publish the Javascript file for the Control Panel
```
php artisan vendor:publish --provider="Jonassiewertsen\ExternalLink\ServiceProvider" --force
```

# Support
I love to share with the community. Nevertheless, it does take a lot of work, time and effort. 

[Sponsor me on GitHub](https://github.com/sponsors/jonassiewertsen/) to support my work and the support for this addon.

## License
This fieldtype is licensed under the MIT license.
