# Antzify Game Rating

Antzify Game Rating is a custom WordPress plugin built as a developer portfolio project. It adds a customizable game review score system to WordPress posts or custom post types like `game_review`.

## 🎮 Features

- Admin panel meta box for entering scores in four categories:
  - Graphics
  - Gameplay
  - Story
  - Sound
- Automatic average score calculation
- Display scores using the shortcode `[game_rating]`
- Compatible with both standard posts and custom post types (e.g. `game_review`)

## 🚀 How to Use

1. Upload the plugin folder to your `wp-content/plugins/` directory.
2. Activate the plugin in WordPress admin.
3. Edit or create a post (or game_review post) and fill in the rating fields.
4. Add the shortcode `[game_rating]` to the post content.
5. View your post to see the rating box in action.

## 📂 File Structure

- `antzify-game-rating.php` – Main plugin file
- `includes/meta-boxes.php` – Handles the admin-side input
- `includes/shortcodes.php` – Outputs the ratings using a shortcode

## 👨‍💻 About

This plugin was developed by [Your Name] as part of a WordPress developer portfolio. It demonstrates the ability to create custom plugins, work with meta boxes, shortcodes, and custom post types.

## 📜 License

MIT License
