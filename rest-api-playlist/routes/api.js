// Import required modules
const express = require('express');
const router = express.Router();
const Ninja = require('../models/ninja');

// GET a list of ninjas from the db
router.get('/ninjas', function(req, res, next){
    // Parse longitude and latitude from request query parameters
    const lng = parseFloat(req.query.lng);
    const lat = parseFloat(req.query.lat);

    // Perform geospatial query using aggregate
    Ninja.aggregate([
        {
            $geoNear: {
                near: { type: 'Point', coordinates: [lng, lat] },
                distanceField: 'dist.calculated',  // Field to store calculated distance
                maxDistance: 100000,               // Maximum distance in meters
                spherical: true                    // Enable spherical geometry
            }
        }
    ]).then(function(ninjas){
        res.send(ninjas);
    }).catch(next);
});

// POST a new ninja to the db
router.post('/ninjas', function(req, res, next){
    Ninja.create(req.body).then(function(ninja){
        res.send(ninja);
    }).catch(next);
});

// PUT (update) a ninja in the db
router.put('/ninjas/:id', function(req, res, next){
    Ninja.findByIdAndUpdate({ _id: req.params.id }, req.body).then(function(){
        Ninja.findOne({ _id: req.params.id }).then(function(ninja){
            res.send(ninja);
        });
    }).catch(next);
});

// DELETE a ninja from the db
router.delete('/ninjas/:id', function(req, res, next){
    Ninja.findByIdAndRemove({ _id: req.params.id }).then(function(ninja){
        res.send(ninja);
    }).catch(next);
});

module.exports = router;
