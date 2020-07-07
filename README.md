# The Creative Coder

## [User Stories](#user_story) | [Tech](#tech) | [Todos](#todos) | [Contact](#contact)

---
As a software engineer I am always trying to learn new things, I am keen to create things as I learn which I think motivates me, by having something tangible to work towards and can demonstrate what i know/help me learn at the same time, that is where this website comes in. It is a portfolio site, just a small project that i am going to build up and break down a few times over, I will be adding other projects to it once I am happy with the state of it. I bought 'the creative coder' domain name a while ago so will hopefully have it hosted once i am happy.

### <a name="Tech">Tech Stack</a>

My expected stack for the project is:

- PHP 7.2 Laravel 7.0, MySQL, Bootstrap, JQuery, Javascript, HTML, CSS, SCSS, phpunit, faker, mockery.

### <a name="installation">Installation: how it works</a>

Clone and install if you wish to.

```
git clone git@github.com:JRRS1982/creativecoder.git
npm install
npm run dev
```

### Testing

I am not too worried about tests as its a website without too much complexity, but will retrospectively add tests if development starts to get complicated and I feel the need.

### <a name="todos">Reflection and further development</a>

**Todos**:

I like the use of TODO's, as can track them pretty easily with VsCode so may scatter them around, as i think of improvements. I have found that Todo Tree is a great extension to manage these, will write acceptance criteria to test.

TODO: add a projects page - project controller.
TODO: get a database setup with table for project
TODO: get feature tests written.
TODO: get unit tests written.
TODO: get search functionality working - focus search of projects.
TODO: create a makefile to run tests easily.
TODO: create a Dockerfile and look at containerizing - maybe.
TODO: double check csrf protection - @csrf under every form declaration.
TODO: CI/CD? Do i want to add this to circleCI?
TODO: how responsive is the site? Its a responsive css stylesheet, but check.
TODO: semantic html - check the html is written fairly cleanly.
TODO: anything i can cut out or refactor? Any code looking dirty?
TODO: update readme.
TODO: get it up hosted online.
TODO: ongoing - add next few projects to it.

### Features

- Factory to populate project table quickly.
```
php artisan tinker
factory(App\Project::class, 5)->create();
```
- Layout file to keep page structure consistent and to DRY.
- Partials to reduce typing and keep DRY.

### Reflection

Enjoying the project so far, am taking a pretty relaxed approach to it. Happy with the style sheets that I integrated, feel like there is a lot of potential.

### Credits

Pixelarity for the lovely (paid) stylesheet otherwise [MIT](https://choosealicense.com/licenses/mit/)
