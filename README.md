app/config/config.yml
---------------------

``` yml
- { resource: @MinecraftBundle/Resources/config/services.yml }
```

app/config/routing.yml
----------------------

``` yaml
MinecraftBundle:
    resource: "@MinecraftBundle/Resources/config/routing.yml"
    prefix:   /
```

app/AppKernel.php
-----------------

``` php
    new FoM\MinecraftBundle\MinecraftBundle(),
```
