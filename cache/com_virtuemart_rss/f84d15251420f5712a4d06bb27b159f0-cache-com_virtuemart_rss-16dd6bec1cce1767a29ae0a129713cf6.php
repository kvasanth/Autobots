<?php die("Access Denied"); ?>#x#a:2:{s:6:"result";a:5:{i:0;O:8:"stdClass":3:{s:4:"link";s:93:"http://virtuemart.net/news/latest-news/481-virtuemart-3-2-4-released-with-new-payment-options";s:5:"title";s:50:"VirtueMart 3.2.4 released with new payment options";s:11:"description";s:3749:"<div><p>The new version comes with a slightly improved PayPal plugin and a new PayPal product named "PayPal Credit". It allows to finance a purchase with PayPal's partner Comenity Capital Bank.</p>
<p>Furthermore Amazon Pay is now ready for productive use. It makes the cart more efficient by using the same login as for amazon.com which autofills the customer's address into the VirtueMart BillTo and ShipTo address forms.</p>
<div>
<p><a href="http://virtuemart.net//download">DOWNLOAD VM3 NOW<br> VirtueMart 3 component (core and AIO)</a></p>
</div>
<p>Also, we worked hard to improve PHP 7 compatibility, exchanged volatile loops and conditions for more robust code and added more error handling code to prevent breaking javascripts. New abstract language helper functions now create the SQL for the language fallbacks, thus reducing bugs and increasing consistent behaviour. The backend now provides more functions for a comfortable workflow, more tooltips, filters, stored states of filters, fixed links and small GUI enhancements. Editing an order now calculates proper results. For example, changing the order status for one item now updates the inventory correctly.</p>
<p>The whole 'Tools' section got cleaned up and a more logical layout. We added a new wizard for setting the safepath, which sets a secure safepath with one click. The old function to change the storeowner got enhanced and now works reliable even when the vmuser entry is missing.<br>The revenue report now works correctly to the second. There is also a new hidden config to set the mode for the week.</p>
<p>The new joomla core 3.7.4 creates the plugin object while updating, so updating a VirtueMart plugin ends in a fatal error because the VM plugins need the loaded VirtueMart environment. Therefore we added a small system plugin, which ensures that the vm environment is loaded.</p>
<p>New triggers increase the flexibility of VirtueMart. The triggers plgVmBeforeStoreProduct and plgVmAfterStoreProduct in the product model allows automatically set product properties. The triggers plgVmOnUpdateCart (in cart controller) and plgVmOnAddToCart (in cart helper function add) give programmers more control when a user is adding an item to the cart.</p>
<p>The cart also has been enhanced with new features. We now have the intuitive automatic shipment/payment. The old method was to set a shipment/payment automatically, when there was only one choice. Then we added a small javascript, which sets the configured method automatically, when available. This had the disadvantage that only one method could be automatically configured and when it was not available, nothing happened. The new method automatically sets the first method. The item update within the cart now also uses ajax, except for removing a product, because there was no backward compatible solution (we may find one later). The new cart layout does not show an extra 'Save' button for the shipment/payment selection anylonger. Plugins which provide extra data must add the button themself.</p>
<p>Opening the order details now works also with ajax. Ajax for the category browse view currently is too complex considering backward compatibility, but it is of course planned for the future. The new productdetails layout now uses the thumbnail function to display the main image. This sounds a bit strange at first, but at the end it makes the automatic resizing feature also available for the main images. Layout overriders can now also change the used layout for the order list and order detail views per hidden config.</p>
<p>To read the complete change list <a href="http://forum.virtuemart.net/index.php?topic=137816.0">http://forum.virtuemart.net/index.php?topic=137816.0</a>
</p></div>";}i:1;O:8:"stdClass":3:{s:4:"link";s:85:"http://virtuemart.net/news/latest-news/480-security-release-of-joomla-3-7-be-prepared";s:5:"title";s:60:"Security release Joomla 3.7.1, update your VirtueMart first!";s:11:"description";s:1737:"<div><p>A Joomla 3.7.1 release containing a security fix will be published on Wednesday 17th May, BUT you should update to VirtueMart 3.2.2 BEFORE updating to Joomal 3.7.1. VirtueMart 3.2 addresses significant changes from Joomal 3.6.5 to Joomla 3.7. If you were still running VM 3.0.18.x with Joomla 3.6.5 to avoid update problems, you will now be forced to update to Joomla 3.7.1. Everybody, regardless of the Joomla or VM 3 version used, should update to the latest VirtueMart version 3.2.2 on Joomla 3.7.0 in order to find and solve any compatibility problems prior to the mandatory Joomla 3.7.1 security release.</p>
<div>
<p><a href="http://virtuemart.net//download">DOWNLOAD VM3 NOW<br> VirtueMart 3 component (core and AIO)</a></p>
</div>
<p>The new&nbsp; VirtueMart 3.2.2 is mainly a bugfix release with very few new features. In VirtueMart 3.2.x the backend language behaviour changed. Previously VM always took the shop language for displaying the content in the VM administration views, regardless the selected backend language. Since VM 3.2 it uses the selected backend language. That created some confusion especially with language fallbacks, because managers had no indication whether or not they saw a language fallback. Now country flags are added to display the origin of the language string, when a language fallback is displayed. Some additional language options are now available. The shop language can now be set directly in the VirtueMart configuration. The language issue of the registration emails is fixed. Also we found a fix for the width of the chosen dropdowns.<br>Other minor features and bug fixes address quick-and-dirty written plugins, outdated relations and adjustments for joomla 3.7.0.</p></div>";}i:2;O:8:"stdClass":3:{s:4:"link";s:78:"http://virtuemart.net/news/latest-news/479-virtuemart-3-2-cached-and-optimized";s:5:"title";s:37:"VirtueMart 3.2 - Cached and Optimized";s:11:"description";s:20620:"<div><h3>Better display options and improved backend gui</h3>
<p>The new handling of the category view and categories is the most interesting feature of the new core. The new options for categories are set globally in the VM configuration and can be finetuned in the category itself and/or in the menu item of the category. The new category view has all old options of the "frontpage" view, so shopowners can now also display grouped products of the category for example featured or topten. The old frontpage view "virtuemart" is now deprecated and won't be developed further, but it will still work for updaters. Additional GUI enhancements in the backend reduce clicks and provide a better overview of the store. Ajax loaded categories and javascript outsourced into libraries do increase the performance when browsing the administration area.</p>
<div>
	<p><a href="http://virtuemart.net//download">DOWNLOAD VM3 NOW<br> VirtueMart 3 component (core and AIO)</a>
	</p>
</div>
<p>&nbsp;</p>
<h3>Improvements under the hood</h3>
<p>The new core got a lot improvements under the hood. The design of the system became more consistent and more and more follows the object caching strategy. This means that we prefer to load a full object, even we just need the name, because it is quite likely that we need the full object a bit later anyway. Also we added program caches for whole functions, not just database searches. Furthermore the new core sets course to Wordpress compatibility. For example the options per category are important for WP, because there are no menu item options similar to the ones used in joomla. The new language system indeed still uses the joomla JLanguage object, but the handling above got separated, so we can better use it in WP. It also has the advantage, that we can load different languages with language overrides for each language correctly in one page call. We need this for example for different email languages. Previously we just reused the old JLanguage object. The system works a bit more performant (not measurable in time, but load) and has less overhead.</p>
<h3>Update friendly</h3>
<p>We paid a lot attention to updaters. Updated systems are set into the legacy layout mode by default. In case a shop uses a system plugin working with VirtueMart, it may happen that there are problems with a multilanguage shop. In this case ask the plugin developer for an updated version (most 3rd party developers already provide an updated version). For layout changes, we highly recommend to use the new layout options.</p>
<p>Templaters and any 3rd party developer using the VirtueMart config object in the trigger onAfterInitialise, please read here http://forum.virtuemart.net/index.php?topic=136826.msg478498#msg478498</p>
<h3>Changelist</h3>
<p>Routing:<br>- load homeid after trying to get the activeMenu <br>- routing of category and manufacturer ids in category view<br>- Itemid for product links<br>- another way in the router to grant that the productmodel is loaded<br>- Added new function in router.php which takes care of loading ids or slugs with multilang using the vm config vm_lfbs. This function maybe more enhanced and added to VmModel<br>- sef lang keys must not have the same translation!<br>- Added previous hidden configuration 'sef_for_cart_links' for SEF links in tab SEF of vm config.</p>
<p>Cache and Optimisations<br>- Added program cache for currency converter. Maybe moved to database<br>- cached getVendorId<br>- enhanced link creation in BE product listing, prepared and cached with static variable<br>- enhancement for the router and product model getProductParentId uses now usually already loaded and cached data of the getProductSingle function. Also the name of the products are now taken from the cache. Usually products are loaded already anyway.<br>- the check if vmdebug should be displayed works now with a static in VmConfig and not with a function. The functions is now executed in loadConfig if needed.<br>- function getParentProductcategory in router.php uses now already cached products if available<br>- sorting on countries published: fix on hash<br>- Added "cache" option for language loader</p>
<p>Currency:<br>- Currency can use now empty Space in format<br>- increased size of currency fields, so that we can use now html entities</p>
<p>Improvements for convenience:<br>Common:<br>- Updated "update xmls" to vm3.0.18<br>- missing language keys<br>- removed id tag from dropdowns to ensure that chosen can always generate a unique id<br>- little fix in calculation, category settings work now also for discounts of rules per bill<br>- added deep category search for product links by GJC<br>- bulgarian states added by servlet <br>- global category settings<br> a) Added parameters of category view to the vm category itself. This includes also renaming of some parameters in the vmconfig, updater is provided<br> b) Added more global options to the new category parameters reused old vm config options (partly of the homepage settings) as global options for the new category parameters<br> c) enhanced the layout for the view global settings in vm config <br> d) Adjusted also the newsfeed of the category view to work as the homepage feed.<br> e) added "no override" setting to the category layout/template parameters. All additional category/template/layout Parameters use now an empty string as "default" (no override)<br><br>Backend:<br>- ajax loading of categories in Administration area.<br>- updated links of help file<br>- Added config which price should be used, when more than one fits (old selection used always the higher price)<br>- added vm config option for legacy layouts<br>- function getLayouts in config model checks for empty directories<br>- fix for tcpdf font listing, when tcpdf is not installed<br>- "debug email" which outputs the emails as message instead of sending them.<br>- fixed coupon search (thank you sandomatyas)<br>- configuration for the feature to omit already loaded products<br>- fix for JCE 2.6.0<br>- fix for editor cf, don't compare JDocumentHTML case sensitive, since Joomla changed it to JDocumentHtml<br>- added discontinued products<br>- added stockhandle on product level<br>- config for stockhandle on product level<br>- choose between replace, add and remove for product bulk associations<br>- more failsafe solution in model product.php for getProductShoppersByStatus in case a userfield is deleted<br>- MV were sortable, but did not show the right order in product edit, fixed<br>- "gui" fixes for customfield Multivariant. Removed phantom child in case it got deleted and fixed for some workflows a wrongly shown error.<br>- fixed rounding of customfield property by adding a new option "use rounding"<br>- added that commas are also replaced for desired final price<br>- createClone works now with getProductSingle, so that clones are still completely configurable by the parent<br>- fixed cloning of products in multilanguage shops<br>- fix in vmtable (for vmusers) function check, new registered users got vendorId of the admin creating the user<br>- added coupon to revenue (as extra column)<br>- fixed report for daily filter, should now work also with correct time offset (r9401)<br>- enhanced order listing, more information, combined some columns<br>- enhanced order editing, please check the help file for the new possibilities<br>- hidden fields also in order edit (by Rupostel)<br>- Shipmentmethod in the order list BE (by Alatak) <br>- colors for order status for faster BE order list reading (by Alatak)<br>- fixed BE ordering of shipment and payment methods<br>- fixed small display error while adding ST address in BE user edit<br>- also ratings are autopublished (worked already for reviews)<br>- BE hover title for image search results</p>
<p>Frontend:<br>- enhanced fallback of meta data in the category view<br>- added config "show_subcat_products"<br>- fixed recent products, was missing creating products by returned ids<br>- added using $this-&gt;isPdf to the cart layout to prevent printing of unnecessary forms<br>- cart sets vendorId=0, when all products are removed an in multivendor mode<br>- no public error for missing images<br>- Added total prices (price per item multiplied by quantity)<br>- related products use now normal price display<br>- added option for related products to have an add to cart button<br>- setProductType for related products<br>- Added product img thumb for Ajax Cart<br>- removed deprecated layout login.php in user view, is now replaced by sublayout login <br>- enhanced js toggling the checkout/confirm button<br>- new Handling of session in function emptyCartFromStorageSession, should throw an logged error in case someone has an unpatched joomla <br>- added feedback when user registration is forbidden by joomla<br>- fixed the problem that the registration mail was always sent regardless the joomla configuration<br>- "Shopper group back to default after order finished." fixed <a href="http://forum.virtuemart.net/index.php?topic=136077.0">http://forum.virtuemart.net/index.php?topic=136077.0</a><br>- fixed "show more revues" button.</p>
<p>Language: <br>- Better language system, we load different languages now in different JLanguage instances<br>- moved language functions of VmConfig in own class vmLanguage, moved class vmLanguage in own file<br>- added new variable $currLangTag, which keeps always the last set language.<br>- vmLanguge function setLanguage is now private, setLanguageByTag should be used<br>- check in vmtable if language tag is correctly set, else it calls vmLanguage::initialise()<br>- added shopFunctionsF::loadOrderLanguages, which loads the language files "shoppers" and "orders" with fallbacks and for the requested extra language<br>- added parameter for loadConfig, so that it can be used without initialising vmLanguage (important for use in onAfterInitialise event) <br>- added log message, when language was not correctly loaded. <br>- added the options for "invoice in user language "<br>- function renderMail uses now the default backend language for the messages to the vendor<br>- vendor emails of orders are now sent always with the vendor language with fallback to joomla default language<br>- fix in router for better BC, loads vmConfig and sets in case the right language, this is need because some plugins load vm before the right language is set by joomla<br>- fix for order/invoice/mail shopper language, when the shop language has not english as default language (=joomla default site language) <br>- Fixed language for invoices header and footer, need resetting of vmlang by VmConfig::setdbLanguageTag added user language to order, is also interesting for support<br>- displayLinkToParent works now with language fallbacks<br>- Added cloning and creation of childs to product edit view <br>- Cloning products: Fixed doubled prices of cloned product, happened due reupdating the product after the process<br>- Cloning products: Fixed missing shoppergroups<br>- added language fallback for manufacturer<br>- language fallback for manufacturer for routing<br>- added fallback for categories in the backend list config model<br>- fix for category search with multilanguage fallbacks<br>- fix for default ordering in product listing with multilanguage fallbacks<br>- fixed ordering for product names in BE list, works also with language fallbacks</p>
<p>Installer/Updater:<br>- Updating an old vm enables the legacy layout<br>- added installation language, minors for sample_virtuemart.sql<br>- added checking for the new order stati, inserted if missing<br>- fullinstaller has virtuemart sample data already selected<br>- language depended sample data is loaded, when available (with suffix _fr_fr for example)<br>- increased max_execution_time and memory_limit in installer and tableupdater<br>- loaded vm instance of install script is now using the temp install folder<br>- enhanced sample data (more reasonable)<br>- changed some default settings of the updater, so that updaters should not notice any difference</p>
<p>Table enhancements:<br>- Some more fields from char to varchar<br>- added some keys for faster reading</p>
<p>SQL:<br>- prevented ambiguous product_mpn<br>- payment and shipment model missed i. for ordering<br>- Some sql were broken for multivendor using fallback for fallback language. Abstract function planned<br>- Replaced all "using" in sql against ON (and that was a lot)<br>- fixed getParentlink query in product edit<br>- getCategoryRecurse sql is not executed for child_id = 0 anylonger<br>- fixed sql getPluginMethods<br>- fixed sql in model category function getParentsList when language fallback is needed<br>- fixed sql of shipment and payment model function getPayments and getShipments (kind of typo a missing alias after the "as"<br>- fixed sql error in customfield.php r9358 <br>- Added some sql table keys id,ordering <br>- small optimisations of sql for using keys better</p>
<p>Program internal:<br>- config helper and regarding config model for WP<br>- renamed stockhandle_discontinued_products to stockhandle_products<br>- renamed product_remaining_stock to product_discontinued<br>- replaced VmConfig::setErrorReporting by VmConfig::setErrRepDefault<br>- Added common function "useSSL", which considers the option in vm and joomla<br>- exchanged "round" against "roundInternal" in calculation helper <a href="http://forum.virtuemart.net/index.php?topic=135622.msg473786#msg473786">http://forum.virtuemart.net/index.php?topic=135622.msg473786#msg473786</a><br>- new function getCurrentUrlBy, which creates a link by Request (get,post) by a whitelist of variablenames correct redirect urls for login, etc loading of product images for ajax cart data with parameter now<br>- model category function getCategory, added check so that an empty category does not try to load medias<br>- moved function getRecentProductIds from shopfunctionsF.php to the product model <br>- Added new Function vmConfig::getMemoryLimitBytes, which returns the set memory_limit with Bytes<br>- Found the error "scalar", happened when a boolean is cast to object r9374<br>- VirtuemartModelConfig function getLayouts, added param to disable the empty option<br>- replaced more json_encode against vmJsApi::safe_json_encode<br>- Each language uses now its own JLanguage object, makes it a lot easier to render different languages <br>- Replaced VmConfig::loadJLang against vmLanguage::loadJLang('com_virtuemart');<br>- htmlentities does not use ini_get("default_charset") anylonger, is set to UTF-8<br>- new function in vmtable checkTableExists<br>- vmpsplugin uses now checkTableExists<br>- email function renderMail got seperated in different functions and cleaned up<br>- removed nasty bug for 3rd party developes which prevented the update of order items using the function updateStatusForOneOrder (r9400)<br>- vmTrace can now log and render the message (before log or render) <br>- function getTCPDFFontsList, replaced function glob against RecursiveDirectoryIterator <br>- added new field vmlisttable, handy to display item lists of models (maintable) <br>- added vRequest::setVar('doVendor', $this-&gt;doVendor); to function renderMailLayout of the invoice, used by sublayouts in the mail<br>- enhanced function getPluginMethods in vmpsplugin.php<br>- Added new getCache function, replaced all JFactory::getCache against VmConfig::getCache<br>- parameters of customfields not set in the product edit do not set a default value anylonger, so the value of the customprototype is used<br>- userfields are now escaped with htmlspecialchar and not htmlentities anylonger<br>- Added missing state="0" for sqls using the joomla extension table. This is important, when someone uninstalled and reinstalled a plugin.<br>- function declarePluginParams is only checking by name, not extension_id anylonger and removed the &amp; in the foreach for better compatibility<br>- updated vmUserfieldPlugin so that its params work similar as the other vmtable params. Is now also php7 compatible.<br>- changed function renderCustomfieldsCart so, that it can display extra data by product and user input data<br>- Added vmdebug as echo to add to cart popup<br>- added clone $product for the triggers plgVmOnProductDisplayShipment and plgVmOnProductDisplayPayment to prevent that the trigger changes accidently the selected variant of the product</p>
<p><br>Javascript:<br>- Added ajax to browse view for multi variants and generic child variants <br>- enhanced ajax for reloading children. The view productdetails must have now the class product-container to work properly with ajax<br>- replaced "all" jQuery calls against $, if within jQuery environment to prevent problems with safari <br>- changed reserver time of "keepAlive" script. The delivery time of the page must be considered.<br>- javascript added boolean setBrowserState to prevent optionally the setting of browser state by ajax<br>- removed avfind.js is now added to cvfind.js<br>- cvfind js, additionally checks to prevent endless "while loops"<br>- switch for loading JHtml::_('behavior.formvalidation'); in vmsjapi and replaced in any files by vmValidator<br>- moved js script of mediahandler in own file<br>- gathered all media edit scripts to one script "mediahandler.js"<br>- gathered product scripts to product.js <br>- removed a lot scripts (for products and media) from the vm2admin.js, added "sortable" and "hide price"<br>- js for add to cart does not check anylonger for the dom type, so it can be used with spans also<br>- vmprices.js setproducttype checks now for the classes product-container, productdetails, vm-product-details-container<br>- Added product img thumb for Ajax Cart<br>- enhanced language switcher js and new lib for the admin menu<br>- BE view orders list und order edit js enhanced</p>
<p>Typos:<br>- typo in config.php created empty language db suffix<br>- typo in order model $orderDetails['details'] must be $order['details']</p>
<p>Layouts:<br>- removed asynchron loading of MV script, created random errors on some browsers<br>- facebox, disabled asynchronous and defer loading<br>- added missing class for ajax to the product module layout "single"<br>- Fixed HTML validation issue of cartpos[] input, moved in td. tr elements can accept only td and th elements as childs.<br>- Fixed invalid br tag. (r9300)<br>- view/category/tmpl/default.php changed if($this-&gt;showproducts) against if (!empty($this-&gt;products)) the option is considered while loading the products and dont need to be checked there<br>- adjusted product_horizon to work with variant ajax reload<br>- wrote fallback for ajax for old layouts<br>- changed the 0 product group (normal products in the browse view) to "products"<br>- update by Stefan Schumacher for the 3 price lists (cart, invoice, orders) removed old tags against inline style (yeh, class comes later)<br>- changed a bit css so that add to cart button can be shown as span</p>
<p>Payments/Shipments:<br>- Fix for paybox IP problem <a href="http://forum.virtuemart.net/index.php?topic=135600.0">http://forum.virtuemart.net/index.php?topic=135600.0</a><br>- little fix for paypal express, removed the possibility to select it as option to prevent errors with ajax <br>- fixed selection of paypal (removing of paypal express from the select list, removed it completely) r9384<br>- paypal has now optional conditional shipments<br>- small fix in Amazon Pay orderreferencenotification.php<br>- Amazon Pay removed VMPAYMENT_AMAZON_PAYMENT_NOT_AVAILABLE message, when the method cannot be selected <br>- Heidelpay adjustments for php 7 and some minors<br>- little fix for authorize.net<br>- Standard shipment plugin: Fixed a small issue, that deactivation of "show on productdetail" was not correctly loaded in the settings<br>- small fix in weight_countries.php, which prevented a checkout when there was no method for weight_countries.php configured and another shipment plugin used<br>- check in weight_countries.php, which prevents that the wrong shipment is autoselected (r9418)<br>- Avatax added check for soap</p>
<p>Security:<br>- rewritten getMyOrderDetails, works now whitelisted<br>- security enhancement for model userfields by Stan Scholtz (Rupostel)<br>- userfields security enhancement by Rupostel double encoded html entities, param changed<br>- added hashing of vmver (js and css)<br>- Added extra check for isFEmanager if user is actually logged in.</p>
<div>
	<p><a href="http://virtuemart.net//download">DOWNLOAD VM3 NOW<br> VirtueMart 3 component (core and AIO)</a>
	</p>
</div></div>";}i:3;O:8:"stdClass":3:{s:4:"link";s:100:"http://virtuemart.net/news/latest-news/478-joomla-security-release-3-6-5-and-patch-for-joomla-2-5-28";s:5:"title";s:57:"Joomla Security Release 3.6.5 and Patch for joomla 2.5.28";s:11:"description";s:1095:"<div><p>There is a security problem in the JUser model. Please update as soon as possible.<a href="https://www.joomla.org/announcements/release-news/5693-joomla-3-6-5-released.html"><br></a><a href="https://www.joomla.org/announcements/release-news/5693-joomla-3-6-5-released.html">https://www.joomla.org/announcements/release-news/5693-joomla-3-6-5-released.html</a><a href="https://www.joomla.org/announcements/release-news/5693-joomla-3-6-5-released.html"></a></p>
<p>Joomla 2.5.x is not anylonger supported by the Joomla project, but we know that a lot people still use joomla 2.5. with VirtueMart. As promised, we provide a fix <a href="http://dev.virtuemart.net/attachments/download/1036/Joomla2.5.28-20161214PATCH.zip">http://dev.virtuemart.net/attachments/download/1036/Joomla2.5.28-20161214PATCH.zip</a>&nbsp;(Direct link).</p>
<p>This patch is just the one for j2.5.28 of last year extended by the new files. Update your joomal 2.5.x at least to the last version j2.5.28.</p>
<p>It is normal that an unpatched j2.5.28 logs you out. The patch should be still applied.&nbsp;</p></div>";}i:4;O:8:"stdClass":3:{s:4:"link";s:86:"http://virtuemart.net/news/latest-news/477-release-of-3-0-18-connecting-the-loose-ends";s:5:"title";s:45:"Release of 3.0.18 - Connecting the loose ends";s:11:"description";s:4852:"<div><p>This new VirtueMart 3 Version is completing the vm3.0 series. There won't be any new vm3.0.x updates other than if we have a security issue. Some of our developers are still developing on Joomla 2.5 to ensure the backward compatibility. But from now on, any new version will be developed on the most recent Joomla or WordPress releases. We won't break the compatibility by purpose, but we just cannot test any longer for older versions.</p>
<p>We have got VirtueMart running on WordPress already in our laboratory. WordPress opens a new market for shops which do not need a complex CMS setup. The last big task is at the moment only the router, which must be adjusted to the WordPress links. The ACL is at the moment only roughly translated, but it will be possible to make it more fine grained later, so that we can simulate 80% of the Joomla rights within Wordpress. Transforming VirtueMart to a cms-less system forces us to use an own user table. So in future we will have real Virtuemart users, not being based on the old Joomla table. The basic trick is that we still use a light version of the Joomla libraries, so extension developers can easily write extensions compatible to Joomla and WordPress. We hope that we can extend this technique to integrate VM into more CMS systems like Drupal. We plan to publish a beta before Christmas.</p>
<p>Since it is the last of its series, we added some of the<a href="http://extensions.virtuemart.net/support/virtuemart-supporter-membership-detail" target="_blank"> membership features</a> to the main version. So product variants work now also in the category browse view. Changing the ordering within a dropdown of a multivariant was quite painful. But we added a drag and drop for the children list, so it is very easy to adjust.</p>
<p>Here an incomplete list of the new features</p>
<h3>New Features for shopowners</h3>
<ul><li>Customfields of type S (String) and P (Property) can be used to automatically create a dropdown for search (like tags)</li>
<li>Added ajax for child variants in category browse view - MV (MultiVariant) and GC (GenericVariant)</li>
<li>Category view now has the same options for displaying additional VM content as were available in the virtuemart view (which is now deprecated)</li>
<li>Update of com_tcpdf to tcpdf version 6.2.12</li>
<li>Added drag and drop sorting of MultiVariants in product edit</li>
<li>Already loaded grouped products are not displayed twice on the same browse view</li>
<li>Product is now virtually added to the cart before the conditions are tested. So it works now also for weights and other conditions (not just price)</li>
<li>User dependent currency for invoice, mail, and order view</li>
<li>Currency can now use the "space character" in the display format</li>
<li>Payment and shipment methods can now be edited in different currencies</li>
<li>Changed addProductToRecent so that it always stores 10 product ids; can be adjust by hidden config max_recent_products</li>
<li>Added a template vmbeez3 derived from beez3</li>
<li>New VirtueMart/Joomla! 3 full installer</li>
<li>Paypal accepts multiple currencies</li>
<li>Amazon works now with the cart ajax and updated library</li>
<li>Avatax taxfreightcode added</li>
</ul><h3>New Features for developer and templater</h3>
<ul><li>shopfunctions::getLoginForm works now with a sublayout login, so it can be used in other views</li>
<li>Added trigger plgVmOnCheckoutCheckStock</li>
<li>Removed id tag from dropdowns to ensure that chosen can always generate a unique id</li>
<li>Quite a lot of JS enhancements, more robust and faster</li>
<li>Added function sendCurrForm, which simply fires the form if an input has the right class.</li>
<li>Plugins can now define in the constructor which values should be handled as convertables</li>
</ul><h2><span>Important for shops with overrides</span></h2>
<p>The new js for using ajax for reloading product content uses now always the same class. The class is "product-container". Just search for the div with "productdetails-view productdetails" and add "product-container". In case you want the ajax reload within a product modul, you need to adjust the overrides here also. Furthermore the layout login of the user view is now in the sublayout folder. Members who used the ajax for child variants within the browse view should change the layout back to default.</p>
<p>For a full list of all changes or more information how to adjust your overrides, please read here in our forum <a href="http://forum.virtuemart.net/index.php?topic=135402.0">http://forum.virtuemart.net/index.php?topic=135402.0&nbsp;</a><a href="http://forum.virtuemart.net/index.php?topic=135402.0"></a></p>
<div>
<p><a href="http://virtuemart.net//download">DOWNLOAD VM3 NOW<br> VirtueMart 3 component (core and AIO)</a></p>
</div></div>";}}s:6:"output";s:0:"";}