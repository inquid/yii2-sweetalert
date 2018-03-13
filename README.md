<p align="center">
    <a href="http://www.yiiframework.com/" target="_blank">
        <img src="http://static.yiiframework.com/files/logo/yii.png" width="400" alt="Yii Framework" />
    </a>
</p>

[![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=contact@inquid.co&item_name=Yii2+extensions+support&item_number=22+Campaign&amount=5%2e00&currency_code=USD)

# yii2-sweetalert
SweetAlert asset for Yii2 framework

# Install 

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Add composer dependence in composer.json

```
"omnilight/yii2-sweetalert": "1.0.*"
```

and run composer update

# Usage

Just register SweetAlert asset in your view as:
```
use omnilight\assets\SweetAlertAsset;

SweetAlertAsset::register($this);
```

and you are ready to use SweetAlert JS code:
```
swal("Hello world!");
```

## License
Extension is released under the MIT License. See the bundled `LICENSE.md` for details.


SUPPORT
-----
[![paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=contact@inquid.co&item_name=Yii2+extensions+support&item_number=22+Campaign&amount=5%2e00&currency_code=USD)
