# Antzify Game Rating – WordPress-lisäosa peliarvosteluihin

Tämä on pieni WordPress-lisäosa, jonka avulla voi antaa ja näyttää arvostelupisteitä peleille. Lisäosa on tehty omana työnäytteenä ja esimerkkinä siitä, miten WordPress-lisäosia voi rakentaa alusta asti itse.

## 🔧 Ominaisuudet

- Arvostelukentät admin-paneelissa (Grafiikka, Pelattavuus, Tarina, Äänimaailma)
- Keskiarvon automaattinen laskenta
- Helppo shortcode: `[game_rating]`
- Toimii sekä tavallisissa artikkeleissa että custom post typeissä (esim. `game_review`)

## 🚀 Näin käytät

1. Lataa ja pura lisäosa `wp-content/plugins/`-kansioon
2. Aktivoi lisäosa WordPressin hallinnassa
3. Avaa artikkeli tai arvostelu ja täytä pisteet
4. Lisää sisältöön lyhytkoodi: `[game_rating]`
5. Julkaise – ja arvostelupisteet näkyvät lukijoille!

## 📁 Tiedostorakenne

- `antzify-game-rating.php` – pääplugin-tiedosto
- `includes/meta-boxes.php` – pisteiden syöttö admin-puolella
- `includes/shortcodes.php` – pisteiden näyttö julkisella puolella

## 👨‍💻 Miksi tämä?

Halusin tehdä pienen mutta hyödyllisen lisäosan, jolla voi tuoda lisäarvoa peliarvostelusivustolle (kuten [antzify.com](https://antzify.com)). Samalla tämä toimii koodinäytteenä WordPress-kehityksestä: metaboxit, shortcodet ja custom post type -tuki.

## 📜 Lisenssi

MIT – saat käyttää, muokata ja kehittää vapaasti eteenpäin.

