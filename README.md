# The Creative Coder

## [User Stories](#user_story) | [Tech](#tech) | [Todos](#todos) | [Features](#features) | [Contact](#contact) 

---
As a software engineer I am always trying to learn new things, I am keen to create things as I learn which motivates me and provides something tangible at the end of the day.

This is a portfolio site, just a small project that i am going to build up and break down a few times over, I will be adding other projects to it once I am happy with the state of it. 

### <a name="Tech">Tech Stack</a>

A PHP / Laravel project with a style sheet added for the css / javascript.

### <a name="installation">Installation: how it works</a>

Not intended for wide use, but to do so;

```
git clone git@github.com:JRRS1982/creativecoder.git
npm install
npm run dev
// create a database then populate the db with some dummy data
php artisan migrate
php artisan tinker
factory(App\Project::class, 9)->create();
```

Testing: I have not yet felt the need to add tests as its a pretty simple site, it is an option if there is further development.

## <a name="todos">Reflection and further development</a>

**Todos**

I quite like the use of TODO's on my own site, as can track them pretty easily with VSCode so may scatter them around a bit, as i think of improvements. I have found that Todo Tree is a great extension to manage them.

TODO: get search functionality working - search of projects - have just used some faker data for the table so not really important until I actually have some data to search through. Original plan was to have the search on the body of the project, but this slimmed down as i don't want separate pages for the projects at the moment. This is a simple site.
TODO: get it up hosted online - Github pages?
TODO: I think there is a way to create a database from the migration in Laravel, could explore this to make the build easier.
```
php artisan make:database {database-name} {connection-name}
```
TODO: make file for the project. 
TODO: add some tests if it starts growing. 
TODO: get it into a docker container maybe.
TODO: add a seed file to populate the table with. 

## <a name="features">Features</a>

Its a pretty basic site really, not many features, but I liked the style sheet so thought I would make it.

- Factory to populate project table quickly.

```

php artisan tinker
factory(App\Project::class, 5)->create();

```

- Layout file to keep page structure consistent and DRY
- Partials to reduce typing and keep DRY
- @csrf tag under html forms to protect against cross-site request forgery
- migration to make a project table
- dynamic display projects from the table
- pretty responsive site imported from style sheets

### Reflection

Enjoying the project so far, am taking a pretty relaxed approach to it. Happy with the style sheets that I integrated, feel like there is a lot of potential. 

### Credits

Pixelarity for the lovely stylesheet otherwise [MIT Licence](https://choosealicense.com/licenses/mit/)
