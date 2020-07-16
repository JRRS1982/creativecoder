# The Creative Coder

## [User Stories](#user_story) | [Tech](#tech) | [Todos](#todos) | [Contact](#contact)

---
As a software engineer I am always trying to learn new things, I am keen to create things as I learn which I think motivates me, by having something tangible to work towards and can demonstrate what i know/help me learn at the same time, that is where this website comes in. It is a portfolio site, just a small project that i am going to build up and break down a few times over, I will be adding other projects to it once I am happy with the state of it. I bought 'the creative coder' domain name a while ago so will hopefully have it hosted once i am happy.

### <a name="Tech">Tech Stack</a>

A PHP / Laravel project with a style sheet added for the css / javascript.

### <a name="installation">Installation: how it works</a>

Not intended for sharing widely, but if you wish its a simple.

```
git clone git@github.com:JRRS1982/creativecoder.git
npm install
npm run dev
php artisan migrate
// populate the db with some dummy data
php artisan tinker
factory(App\Project::class, 9)->create();
```

### Testing

Its a static site, I have not yet felt the need to add tests, it is an option if there is further development.

### <a name="todos">Reflection and further development</a>

**Todos**:

I like the use of TODO's, as can track them pretty easily with VsCode so may scatter them around, as i think of improvements. I have found that Todo Tree is a great extension to manage these, will write acceptance criteria to test.

TODO: get search functionality working - search of projects.
TODO: get it up hosted online - Github?

TODO: add some tools to the tools page - dunno what, just add some blurb, just a static page.

### Features

Its a pretty basic site really, not many features, but I liked the style sheet so thought I would make it.

- Factory to populate project table quickly.

```

php artisan tinker
factory(App\Project::class, 5)->create();

```

- Layout file to keep page structure consistent and DRY
- Partials to reduce typing and keep DRY
- @csrf tag under each html form to protect against cross-site request forgery
- migration to make a project table
- dynamic display projects from the database

### Reflection

Enjoying the project so far, am taking a pretty relaxed approach to it. Happy with the style sheets that I integrated, feel like there is a lot of potential.

### Credits

Pixelarity for the lovely (paid) stylesheet otherwise [MIT](https://choosealicense.com/licenses/mit/)
