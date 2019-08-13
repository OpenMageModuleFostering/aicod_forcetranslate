Aicod_ForceTranslate
http://www.ecommercegrow.com/

Purpose:
- Some "magento translations keys" like simple ones "start", "qty" and others are repeated for every "scope" like: "Mage_Sales.csv", "Mage_Checkout.csv" etc.
  this extension allow you to bypass any scope and keep the core csv files not modified, all you need to to is insert you translation in:
  {MAGENTO_ROOT}/app/design/frontend/{PACKAGE}/{THEME}/locale/{LOCALE_CODE}/translate_force.csv
  LOCALE_CODE uses the same folder names you find in: {MAGENTO_ROOT}/app/locale

Compatibility:
- Magento 1.7+

Installation:
- Intall the provided tgz package file with the magento web gui:
  Magento Backend\System\Magento Connect\Magento Connect Manager\Direct package file upload\Upload
  Alternatively via command line: "MAGENTO_ROOT/mage install-file PACKAGEFILE.tgz"
- Always remember to flush magento cache after installing any extension: Magento Backend\System\Cache Management\Flush Cache Storage
  And logout/login from the magento backend.

Uninstallation:
- Choose Unistall in Magento Backend\System\Magento Connect\Magento Connect Manager\Manage Existing Extensions
  Alternatively via command line: "MAGENTO_ROOT/mage uninstall community PACKAGENAME" (use "MAGENTO_ROOT/mage list-installed" to retrive the list of installaed packages)

Configuration / Usage:
- Once installed the extension become immediatly active.
- Edit {MAGENTO_ROOT}/app/design/frontend/{PACKAGE}/{THEME}/locale/{LOCALE_CODE}/translate_force.csv
  