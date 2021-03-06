# CHANGELOG FOR `1.0.X`

## v1.0.4 (2019-06-19)

#### TL;DR

- Sync list of countries into the zone `Rest of the world` from `symfony/intl` package.

#### Details

- [See the diff since the last patch release](https://github.com/Prometee/SyliusVIESClientPlugin/compare/v1.0.3...v1.0.4)

## v1.0.3 (2019-05-28)

#### TL;DR

- Add doc for address fixture named : `address_with_vat_number`
- Remove Twig `addPath` overrides (now you have to copy the templates override into your `templates/bundles` )

#### Details

- [See the diff since the last patch release](https://github.com/Prometee/SyliusVIESClientPlugin/compare/v1.0.2...v1.0.3)

## v1.0.2 (2019-05-27)

#### TL;DR

- Change from annotation mapping validation to xml mapping validation for `VatNumber`
- Add `CountryVatNumber` validation : the VAT Number should be the same country as the one selected in the `Address`
- Add `YAML` mapping infos ([@kappaj](https://github.com/kappaj))

#### Details

- [See the diff since the last patch release](https://github.com/Prometee/SyliusVIESClientPlugin/compare/v1.0.1...v1.0.2)

## v1.0.1 (2019-05-07)

#### TL;DR

- Remove configuration of `sylius_addressing.resources.address.classes.model`
- Remove configuration of `sylius_channel.resources.address.classes.model`
- Remove `Channel` and `Address` have been removed from the `Entity` folder (see [README.md](README.md) for more information)
- Add fixture to allow auto-configuration of `Channel`
- Rename the listener service
- Rename services beginning with `prometee.sylius_viesclient_plugin` by `prometee.sylius_vies_client_plugin`

#### Details

- [See the diff since the last patch release](https://github.com/Prometee/SyliusVIESClientPlugin/compare/v1.0.0...v1.0.1)
