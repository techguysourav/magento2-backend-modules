# How to extend the Magento2 Backend Menu

we added a new page to the backend, but it is important that you are able to easily navigate to your custom pages. Not everyone knows the URL, and if the secret
keys are enabled for the administrator URLs, it is likely impossible to build a correct URL because you have to know the key.

Files: 
1)	menu.xml 
	Place this file in path-to-module/etc/adminhtml/menu.xml

2) acl.xml
	Place this file in path-to-module/etc/acl.xml.Active access to this menu item.
	


## Steps

1)First we have to think about where we will get an extra menu item in the Admin menu. In this module we creating separate menu item but we can create menu item Under predefined menu items such as

* Marketing
* Content
* Stores
* System

example : Add under Marketing menu item.Attribute parent="Magento_Backend::marketing"  used .

<add
		id="Packt_HelloWorld::helloworld"
		title="HelloWorld"
		module="Packt_HelloWorld"
		sortOrder="50"
		parent="Magento_Backend::marketing"
		resource="Packt_HelloWorld::helloworld"
/>





