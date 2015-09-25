# Mediamock Magento Module

What is mediamock? Please read [https://github.com/SchumacherFM/mediamock](https://github.com/SchumacherFM/mediamock).

This module disables HDD file access when reading and generating images within Magento.

You can remove all media files from your development media folder and save disk space.

## Description

Only use for development or in staging environment!

### Step 1: Install Magento mediamock module

- Install this module by copying all the files from the repository to the appropriate folders.
- Install via modman `modman clone https://github.com/SchumacherFM/mediamock-magento.git`
- Install via composer

on your development machine.

### Step 2: mediamock analyzes your production media directory

Download the [mediamock binary](https://github.com/SchumacherFM/mediamock/releases) for your operating system.

ssh into your production server then run this mediamock binary.

```
$ mediamock analyze -d path/to/media -o path/to/media.csv.gz
```

Mediamock will read the file structure and image sizes and writes it into a csv.gz file.

For help see: `$ mediamock help analyze`.

### Step 3: Starting mediamock as a server

Now on your local development machine. Download the [mediamock binary](https://github.com/SchumacherFM/mediamock/releases)
for your operating system. Then start the server:

```
$ mediamock -p icon server -i http://magento-prd-host.com/media.csv.gz --urlPrefix=media
```

For help see: `$ mediamock help server`.

For detailed statistic about mediamock server internals you can visit

- `http://localhost:4711/` Tiny directory index
- `http://localhost:4711/debug/charts/` Garbage Collection and Memory Usage stats
- `http://localhost:4711/json` all files as a JSON stream
- `http://localhost:4711/html` all files as a HTML table

### Step 4: Base URL changes in Magento

Configure URLs under `System - Configuration - Web - Unsecure` and 
`System - Configuration - Web - Secure` for all store views!

![Adjust base media urls](/BaseMediaUrlSettings.png)

Alternatively:

```
UPDATE `core_config_data` SET `value` = 'http://127.0.0.1:4711/media/' 
WHERE `path` LIKE '%media_url%' AND `value` like '%media%';
```

### Step 5: Clear caches and load front end

And voila your images will be generated on the fly!

![Preview mocked front end](/MagentoFrontEndMocked.png)

## Conflicts

This module will conflict with all modules which rewrites the following classes:

- Mage_Catalog_Model_Product_Image

For example:

- [https://github.com/Vinai/nicer-image-names](https://github.com/Vinai/nicer-image-names)

Compatibility
-------------

- Magento >= 1.5

Support / Contribution
----------------------

Report a bug using the issue tracker or send us a pull request.

Instead of forking I can add you as a Collaborator IF you really intend to develop on this module. Just ask :-)

For versioning have a look at [Semantic Versioning 2.0.0](http://semver.org/)

Licence
-------
[OSL - Open Software Licence 3.0](http://opensource.org/licenses/osl-3.0.php)

Author
------

[Cyrill Schumacher](http://cyrillschumacher.com)

[My pgp public key](http://www.schumacher.fm/cyrill.asc)
