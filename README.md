## D00223094 - Dylan Murphy
# Valorant Stats Tracker
This is my website for my Server Side Development CA3. It is a statistics website for a tactical first person shooter game called Valorant

---

<details>
<summary>🔻Click to expand: Clone and Run Locally🔻</summary>


## Cloning this website.

Follow the instructions below to clone the repository, configure the environment, set up the database, and run the application locally.

### 1. Clone the Repository
```bash
git clone https://github.com/dylanmurph/valostats.git
cd valostats
```

### 2. Install PHP & Node Dependencies
Ensure you have **PHP 8.2**, **Composer**, **Node.js**, and **MySQL** installed.
```bash
composer install
npm install
npm run dev
```

### 3. Configure Environment
Copy the example environment file and set your configuration:
```bash
cp .env.example .env
```
Then edit the following lines in `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=valostats
DB_USERNAME=root
DB_PASSWORD=your_password
```
Then generate the application key:
```bash
php artisan key:generate
```

### 4. Create the Database
Create a MySQL database manually:
```sql
CREATE DATABASE valostats;
```

### 5. Run Migrations & Seeders
```bash
php artisan migrate --seed
```

### 6. Launch the Application
```bash
php artisan serve
```
</details>

---

<details>
<summary>🔻Click to expand: Project Overview🔻</summary>

## Project Overview
This is a Laravel-based web application to display player statistics and information for Valorant. You can view player statistics, leaderboards, maps and agents information.

The application is styled with TailwindCSS, with a dark theme. The backend is built with Laravel and utilising the Eloquent ORM for database interaction.

Pages:
- Home Page
- Leaderboard
- Player Profiles
- Agent List
- Agent Detailed View
- Map List
- Map Detailed View

Features:
- Top 3 players on the home page
- Player profiles displaying their best map/agent as their profile picture/banner
- Sorted Leaderboard with ranks displayed based on elo using valorant_ranks config file
- Best Map/Best Agent logic 
- Dynamic player profile with tabbed content for a clean design
- Use of tailwind.config.js for modular web colour theme

---

## Database & Relationships

This project uses 5 main tables:
- `players`
- `agents`
- `valorant_maps`
- `player_agent_stats`
- `player_map_stats`

### Relationships
- `players` <-> `player_agent_stats`
- `players` <-> `player_map_stats`
- `agents` <->  `player_agent_stats`
- `valorant_maps` <-> `player_map_stats`
- `player_agent_stats` and `player_map_stats`  belong to `player` and `agent/map`

### Seeding
The database is seeded with true map/agent data from Valorant.

The seeder FullStatSeeder generates realistic randomised mock data of players with their map/agent statistics 

### ERD
![ERD Diagram](public\images\erd.png)

</details>

---


<details>
<summary>🔻Click to expand: MVC Architecture Breakdown🔻</summary>

## MVC Architecture Breakdown


### Models
- `Player`, `Agent`, `ValorantMap`, `PlayerAgentStat`, `PlayerMapStat`
- Using Eloquent ORM to simplify database interaction

### Controllers
- `PlayerController`: Handles player profile pages, leaderboard sorting, and player-related logic.
- `AgentController`: Manages listing of agents and individual agent detail pages.
- `MapController`: Similar structure for maps and detailed views.
- `HomeController`: Renders the landing page including top players and stats.

### Views
- Responsive design using TailwindCSS
- Views:
    - `home.blade.php`, `header.blade.php`
    - `players/index.blade.php`(leaderboard), `players/show.blade.php`(player profile)
    - `agents/index.blade.php`(agent list), `agents/show.blade.php`(agent details)
    - `maps/index.blade.php`(map list), `maps/show.blade.php`(map details)


### Config
- `config/valorant_ranks.php`: Custom configuration to set ranks/rank images based on player elo

</details>


---

<details>
<summary>🔻Click to expand: Incomplete/Planned features🔻</summary>

### Incomplete/Planned Features
- Complete match data for 5v5 matches
- Gun statistics
- Accuracy statistics
- Player performance trends/graphs
- Agents leaderboard based on winrate on each map
- Login
- Claim profile by validating Riot ID
- Editing profile design/pictures
- Setting account to private to hide stats from the public 
- Search bar
- Complete mobile integration
- Connect to Riot Games API for live data and complete playerbase statistics

</details>

