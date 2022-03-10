# phpQRCode

### Generate SVG QR Codes. MIT license.

This is a stripped down version of https://github.com/kreativekorp/barcode inspired by another version at https://github.com/psyon/php-qrcode


Install via composer:

```
composer require php-qrcode
```

Usage:

```
use splitbrain\phpQRCode\QRCode;
echo QRCode::svg('hello world');
```

The above will directly output the generated SVG file. This file has no styles attached. Use CSS to style howver you want it:

```
svg {
    width: 10em;
    height: 10em;
    fill: #ff0000;
}
```


### Options:
`s` - Symbology (type of QR code). One of:
```
    qrl
    qrm
    qrq
    qrh
```
