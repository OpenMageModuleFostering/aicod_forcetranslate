Aicod_ForceTranslate
http://www.ecommercegrow.com/

Purpose:
- This module allows to bypass any other module translation forcing magento to always translate a phrase as you specify in the translate_force.csv file.
  Additionally you can insert some traslations in the translate_fallback.csv file so if some module does not traslate a phrase your fallback one will be used.
  These file are located at:
  {MAGENTO_ROOT}/app/design/frontend/{PACKAGE}/{THEME}/locale/{LOCALE_CODE}/translate_force.csv
  {MAGENTO_ROOT}/app/design/frontend/{PACKAGE}/{THEME}/locale/{LOCALE_CODE}/translate_fallback.csv

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
- Edit {MAGENTO_ROOT}/app/design/frontend/{PACKAGE}/{THEME}/locale/{LOCALE_CODE}/translate_fallback.csv
  