const express = require('express');
const mongoose = require('mongoose');
const bodyParser = require('body-parser');
const methodOverride = require('method-override');

const app = express();

// Connect to MongoDB
mongoose.connect('mongodb://localhost:27017/myBlogDB', { useNewUrlParser: true, useUnifiedTopology: true });

// Middleware
app.use(bodyParser.urlencoded({ extended: true }));
app.use(methodOverride('_method'));
app.set('view engine', 'ejs');

const Blog = require('./models/blog');

// INDEX - Show all blogs
app.get('/blogs', async (req, res) => {
    try {
        const blogs = await Blog.find({});
        res.render('index', { blogs: blogs });
    } catch (err) {
        console.log(err);
        res.redirect('/');
    }
});

// CREATE - Add new blog to DB
app.post('/blogs', async (req, res) => {
    try {
        await Blog.create(req.body.blog);
        res.redirect('/blogs');
    } catch (err) {
        console.log(err);
        res.render('new');
    }
});

// SHOW - Shows more info about one blog
app.get('/blogs/:id', async (req, res) => {
    try {
        const foundBlog = await Blog.findById(req.params.id);
        res.render('show', { blog: foundBlog });
    } catch (err) {
        console.log(err);
        res.redirect('/blogs');
    }
});

// EDIT - Show edit form for one blog
app.get('/blogs/:id/edit', async (req, res) => {
    try {
        const foundBlog = await Blog.findById(req.params.id);
        res.render('edit', { blog: foundBlog });
    } catch (err) {
        console.log(err);
        res.redirect('/blogs');
    }
});

// UPDATE - Update a particular blog
app.put('/blogs/:id', async (req, res) => {
    try {
        await Blog.findByIdAndUpdate(req.params.id, req.body.blog);
        res.redirect('/blogs/' + req.params.id);
    } catch (err) {
        console.log(err);
        res.redirect('/blogs');
    }
});

// DELETE - Delete a particular blog
app.delete('/blogs/:id', async (req, res) => {
    try {
        await Blog.findByIdAndRemove(req.params.id);
        res.redirect('/blogs');
    } catch (err) {
        console.log(err);
        res.redirect('/blogs');
    }
});

// NEW - Show form to create a new blog
app.get('/blogs/new', (req, res) => {
    res.render('new');
});


// Start the server
const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
  console.log(`Server is running on port ${PORT}`);
});
