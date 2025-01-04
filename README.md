# An extension to improve the display of the stock and delivery information for Shopware 6

An extension to _improve the display of the stock and delivery information_ on the _product detail page_. In the interest of _accessibility_, it is possible to _display the availability indicator_ not only in color, but _also via icons (checkmark, exclamation and X)_. 

For the _icons_, the _color_, the _width_, the _height_ and the _distance to the top can be specified_ in pixels.

For the exclamation mark can be made different settings.

For the _circle_, the _width_, _height_ and _distance to the top can be specified_ in pixels.

If necessary, the _text can also be colorized_.

In addition, you can _customize the color_ and the _text for each status_ within the configuration of the extension.

If the _product is available and has a delivery time_, _three circles can be displayed instead of one_. If the _product has a release date_ or the _status when it will be back in stock_, you can display _two circles instead of one_.

## Possible configurations for the circle without icon
- select the width in pixels (*1)
- select the height in pixels (*1)
- select the distance to the top in pixels (*1) 

## Possible configurations for the circle with icon
- select the height in pixels (*1)
- select the distance to the top in pixels (*1)

## Possible configurations for the icons
- select if the icons should be shown
- select the color (*1)
- select the width in pixels (*1)
- select the height in pixels (*1)
- select the distance to the top in pixels (*1)

## Possible configurations for the exclamation icon
- select the width in pixels (*1)
- select the height in pixels (*1)
- select the distance to the top in pixels (*1)
- select the outside distance to the top in pixels (*1)

## Possible configurations for the text
- select if the text should be colorized

## Possible configurations for the status, if the product is not active
- select the color (*1)
- set the text via snippet

## Possible configurations for the status, if the product has a release date
- select if two circles should be shown
- select the color (*1)
- set the text via snippet

## Possible configurations for the status, if the product is available and has a delivery time
- select if three circles should be shown
- select the color (*1)
- set the text via snippet

## Possible configurations for the status, if the product is sold out
- select the color (*1)
- set the text via snippet

## Possible configurations for the status when a product will be back in stock
- select if two circles should be shown
- select the color (*1)
- set the text via snippet

## Available snippets
- general.deliveryNotAvailable
- general.deliveryShipping
- detail.deliveryTimeAvailable
- detail.soldOut
- detail.deliveryTimeRestock

## Some changes in the settings within the configuration are not immediately visible in the frontend of the shop
After changing settings specifically for the appearance of the circles and the icons (*1), the theme must be recompiled, for example by saving the theme in the administration:
1. Switch to "Content" and "Themes"
2. Select the active theme
3. Click on the button "Save"

## How to install the extension
### via console (recommended)
1. Download the latest _SschreierImprovementDisplayStockDeliveryInformation-master.zip_.
2. Unzip the zip file and rename the folder to _SschreierImprovementDisplayStockDeliveryInformation_.
3. Move the folder to the project folder _custom/plugins/_ .
4. Connect to the console via ssh:

```
bin/console plugin:refresh
bin/console plugin:install --activate SschreierImprovementDisplayStockDeliveryInformation
```

### via composer
1. Add the repository URL to the composer.json of the project
```
"repositories": [
    ...,
    {
        "type": "vcs",
        "url": "https://github.com/sschreier/SschreierImprovementDisplayStockDeliveryInformation"
    }
],
```

2. Connect to the console via ssh and install the plugin source code via the command
```
composer require sschreier/sschreierimprovementdisplaystockdeliveryinformation
bin/console plugin:refresh
bin/console plugin:install --activate SschreierImprovementDisplayStockDeliveryInformation
```

### via zip upload
1. Download the latest _SschreierImprovementDisplayStockDeliveryInformation-master.zip_.
2. Unzip the zip file and rename the folder to _SschreierImprovementDisplayStockDeliveryInformation_.
3. Zip the folder to _SschreierImprovementDisplayStockDeliveryInformation.zip_.
4. Upload the zip in the Shopware Administration.
5. Install & Activate the extension.

#### extension update (zip)
1. Download the latest _SschreierImprovementDisplayStockDeliveryInformation-master.zip_.
2. Unzip the zip file and rename the folder to _SschreierImprovementDisplayStockDeliveryInformation_.
3. Zip the folder to _SschreierImprovementDisplayStockDeliveryInformation.zip_.
4. Upload the zip in the Shopware Administration.
5. Update the extension.

## Images

### circle with an icon for the status, if the product is not active

![circle with an icon for the status, if the product is not active](https://www.sebastianschreier.de/plugins/SschreierImprovementDisplayStockDeliveryInformation/SschreierImprovementDisplayStockDeliveryInformation-Image1.jpg)

### circle with an icon for the status, if the product has a release date

![circle with an icon for the status, if the product has a release date](https://www.sebastianschreier.de/plugins/SschreierImprovementDisplayStockDeliveryInformation/SschreierImprovementDisplayStockDeliveryInformation-Image2.jpg)

### circle with an icon for the status, if the product is available and has a delivery time

![circle with an icon for the status, if the product is available and has a delivery time](https://www.sebastianschreier.de/plugins/SschreierImprovementDisplayStockDeliveryInformation/SschreierImprovementDisplayStockDeliveryInformation-Image3.jpg)

### circle with an icon for the status, if the product is sold out

![circle with an icon for the status, if the product is sold out](https://www.sebastianschreier.de/plugins/SschreierImprovementDisplayStockDeliveryInformation/SschreierImprovementDisplayStockDeliveryInformation-Image4.jpg)

### circle with an icon for the status when a product will be back in stock

![circle with an icon for the status when a product will be back in stock](https://www.sebastianschreier.de/plugins/SschreierImprovementDisplayStockDeliveryInformation/SschreierImprovementDisplayStockDeliveryInformation-Image5.jpg)

### circle without an icon, but with colorized text

![circle without an icon, but with colorized text](https://www.sebastianschreier.de/plugins/SschreierImprovementDisplayStockDeliveryInformation/SschreierImprovementDisplayStockDeliveryInformation-Image6.jpg)

### three circles without icons for the status, if the product is available and has a delivery time

![three circles without icons for the status, if the product is available and has a delivery time](https://www.sebastianschreier.de/plugins/SschreierImprovementDisplayStockDeliveryInformation/SschreierImprovementDisplayStockDeliveryInformation-Image7.jpg)

### two circles without icons for the status, if the product has a release date

![two circles without icons for the status, if the product has a release date](https://www.sebastianschreier.de/plugins/SschreierImprovementDisplayStockDeliveryInformation/SschreierImprovementDisplayStockDeliveryInformation-Image8.jpg)


### extension configuration part 1

![extension configuration part 1](https://www.sebastianschreier.de/plugins/SschreierImprovementDisplayStockDeliveryInformation/SschreierImprovementDisplayStockDeliveryInformation-Image9.jpg)

### extension configuration part 2

![extension configuration part 2](https://www.sebastianschreier.de/plugins/SschreierImprovementDisplayStockDeliveryInformation/SschreierImprovementDisplayStockDeliveryInformation-Image10.jpg)

### extension configuration part 3

![extension configuration part 3](https://www.sebastianschreier.de/plugins/SschreierImprovementDisplayStockDeliveryInformation/SschreierImprovementDisplayStockDeliveryInformation-Image11.jpg)

### extension configuration part 4

![extension configuration part 4](https://www.sebastianschreier.de/plugins/SschreierImprovementDisplayStockDeliveryInformation/SschreierImprovementDisplayStockDeliveryInformation-Image12.jpg)

### extension configuration part 5

![extension configuration part 5](https://www.sebastianschreier.de/plugins/SschreierImprovementDisplayStockDeliveryInformation/SschreierImprovementDisplayStockDeliveryInformation-Image13.jpg)

### extension configuration part 6

![extension configuration part 6](https://www.sebastianschreier.de/plugins/SschreierImprovementDisplayStockDeliveryInformation/SschreierImprovementDisplayStockDeliveryInformation-Image14.jpg)

### extension configuration part 7

![extension configuration part 7](https://www.sebastianschreier.de/plugins/SschreierImprovementDisplayStockDeliveryInformation/SschreierImprovementDisplayStockDeliveryInformation-Image15.jpg)

### extension configuration part 8

![extension configuration part 8](https://www.sebastianschreier.de/plugins/SschreierImprovementDisplayStockDeliveryInformation/SschreierImprovementDisplayStockDeliveryInformation-Image16.jpg)

### extension configuration part 9

![extension configuration part 9](https://www.sebastianschreier.de/plugins/SschreierImprovementDisplayStockDeliveryInformation/SschreierImprovementDisplayStockDeliveryInformation-Image17.jpg)

### extension configuration part 10

![extension configuration part 10](https://www.sebastianschreier.de/plugins/SschreierImprovementDisplayStockDeliveryInformation/SschreierImprovementDisplayStockDeliveryInformation-Image18.jpg)
