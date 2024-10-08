# classificationstore

Pimcore11 bundle that provides import and export for classification store structure and other facilities.

**Table of Contents**

- [classificationstore](#)
	- [Compatibility](#compatibility)
	- [Installation](#installation)
	- [Documentation](#documentation)
	- [Usage - import](#usage-import)
	- [Usage - export](#usage-export)
	- [Contributing](#contributing)
    - [Licensing](#licensing)
    - [Standards & Code Quality](#standards-code-quality)

## Compatibility
Release 1.0.0 - Pimcore 5.4.0 up to Pimcore 6.9
Release 2.0.0 - Pimcore 10.0 and higher

## Installation
```
composer require divante-ltd/pimcore-classification-store-importer
```

## Documentation

https://divante.atlassian.net/wiki/spaces/KPWP/pages/896106614/Classificationstore+bundle

## Usage - import
```
bin/console divante:classificationstore:import -f path/to/file/cs_structure.csv -d ";" -c "'"
```
where -d ";" option stands for CSV delimiter; and -c '"' stands for field enclosure

Each row in CSV file represents single item: store, collection, group or key.

Each row is of the form: param1;value1;param2;value2;param3;value3;...
##### Common parameters:
- item - one of: store, collection, group, key
- name - name of the item
- description - description of the item
- store - store name of the item (for collections, groups and keys)
- groups - comma-separated list of groups belonging to a collection (only for colections)
- keys - comma-separated list of keys belonging to a group (only for groups)

##### Keys parameters:
- type - type of key (curently supported: input, checkbox, booleanSelect, numeric, textarea, wysiwyg, select, multiselect)
- title - key title
- options for select and multiselect are provided like: option_text1;Color blue;option_value1;3;option_text2;Color green;option_value2;4

Other parameters depend on particular key type.

##### Keys' other parameters (defaults):
- booleanSelect: yesLabel (yes), noLabel (no), emptyLabel (empty), width

##### Example of CSV file
```
item;store;name;store1;description;store1_description;;;;;;;;;;;;
item;store;name;store2;description;store2_description;;;;;;;;;;;;
;;;;;;;;;;;;;;;;;
item;collection;store;store1;name;col1;description;col1_descr;groups;group1_name, group2_name;;;;;;;;
item;collection;store;store2;name;col2;description;col2_descr;groups;group1_name;;;;;;;;
;;;;;;;;;;;;;;;;;
item;group;store;store1;name;group1_name;description;gr1_descr;keys;key1_name,key2_name;sorter;key1_sorter_val,key2_sorter_val ;;;;;;;;;
item;group;store;store2;name;group2_name;description;gr2_descr;keys;sorter ;;;;;;;;;
;;;;;;;;;;;;;;;;;
item;key;store;store2;name;key2_name;title;key2_title;description;key2_description;type;input;;;;;;;;
item;key;store;store1;name;key1_name;title;key1_title;description;key1_description;type;select;option_text1;blue;option_value1;3;option_text2;green;option_value2;4
```

## Usage - export
```
bin/console divante:classificationstore:export -f path/to/file/cs_structure.csv -d ";"
```
where -d ";" option stands for CSV delimiter; and -c '"' stands for field enclosure

Export file has the same form as import file described above.

## Release 1.0.0 Notes
Adds the information about 'sorter' to export file. This allows to have keys sorted within a group.

## Licensing
The code in this project is licensed under the GPLv3 license.

## Standards & Code Quality
This module respects all Pimcore5 code quality rules and our own PHPCS and PHPMD rulesets.

## About Authors
forked from DivanteLtd/pimcore-classification-store-importer
