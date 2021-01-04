Derivative Images (module for Omeka S) (archived)
======================================

> __New versions of this module and support for Omeka S version 3.0 and above
> are available on [GitLab], which seems to respect users and privacy better
> than the previous repository.__

> **IMPORTANT**: This module is now integrated in module [Bulk Check] and won’t
> be updated any more.

[Derivative Images] is a module for [Omeka S] that allows to recreate all
derivative files from the original media, if they are still available. It is
useful when you change the parameters of the thumbnails, for example bigger or
lower size, or when you add a new derivative type.

It is a full rewrite of the [plugin Derivative images] for [Omeka Classic] of
the Roy Rosenzweig Center for History and New Media.


Installation
------------

Uncompress files and rename module folder `DerivativeImages`.

See general end user documentation for [Installing a module] and follow the
config instructions.


Usage
-----

Because this is a tool that is rarely used, only the global admin can use it.

First, parameter your thumbnails in the file `config/local.config.php`.

Then, simply check the box in the config page of the module. The job is launched
in the background.

When the process is ended (check the job log), the module can be uninstalled.

To create the image on the second page or any other next ones of pdf files,
include this in the main config/local.config.php of Omeka (see [#4]):

```php
    'thumbnailer_options' => [
        'imagemagick_dir' => null,
        'page' => 1,
    ],
```

You can find missing derivative files and files that don't exist in database
with the module [Bulk Check].


TODO
----

- Add options to select all thumbnails or only missing ones, all types of
  thumbnails or not.
- Manage creation of thumbnails for media without original (youtube…).


Warning
-------

Use it at your own risk.

It’s always recommended to backup your files and your databases and to check
your archives regularly so you can roll back if needed.


Troubleshooting
---------------

See online issues on the [module issues] page.


License
-------

This module is published under the [CeCILL v2.1] license, compatible with
[GNU/GPL] and approved by [FSF] and [OSI].

This software is governed by the CeCILL license under French law and abiding by
the rules of distribution of free software. You can use, modify and/ or
redistribute the software under the terms of the CeCILL license as circulated by
CEA, CNRS and INRIA at the following URL "http://www.cecill.info".

As a counterpart to the access to the source code and rights to copy, modify and
redistribute granted by the license, users are provided only with a limited
warranty and the software’s author, the holder of the economic rights, and the
successive licensors have only limited liability.

In this respect, the user’s attention is drawn to the risks associated with
loading, using, modifying and/or developing or reproducing the software by the
user in light of its specific status of free software, that may mean that it is
complicated to manipulate, and that also therefore means that it is reserved for
developers and experienced professionals having in-depth computer knowledge.
Users are therefore encouraged to load and test the software’s suitability as
regards their requirements in conditions enabling the security of their systems
and/or data to be ensured and, more generally, to use and operate it in the same
conditions as regards security.

The fact that you are presently reading this means that you have had knowledge
of the CeCILL license and that you accept its terms.


Copyright
---------

* Copyright Daniel Berthereau, 2018-2020


[Derivative Images]: https://gitlab.com/Daniel-KM/Omeka-S-module-DerivativeImages
[Omeka S]: https://omeka.org/s
[plugin Derivative Images]: https://omeka.org/classic/plugins/DerivativeImages/
[Omeka Classic]: https://omeka.org/classic
[Bulk Check]: https://gitlab.com/Daniel-KM/Omeka-S-module-BulkCheck
[Installing a module]: https://omeka.org/s/docs/user-manual/modules/#installing-modules
[#4]: https://gitlab.com/Daniel-KM/Omeka-S-module-DerivativeImages/-/issues/4
[module issues]: https://gitlab.com/Daniel-KM/Omeka-S-module-DerivativeImages/-/issues
[CeCILL v2.1]: https://www.cecill.info/licences/Licence_CeCILL_V2.1-en.html
[GNU/GPL]: https://www.gnu.org/licenses/gpl-3.0.html
[FSF]: https://www.fsf.org
[OSI]: http://opensource.org
[GitLab]: https://gitlab.com/Daniel-KM
[Daniel-KM]: https://gitlab.com/Daniel-KM "Daniel Berthereau"
