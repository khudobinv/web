```stl
solid model
  # Основание цилиндра
  facet normal 0.0 0.0 -1.0
    outer loop
      vertex 0.0 0.0 0.0
      vertex 1.0 0.0 0.0
      vertex 0.7071 0.7071 0.0
    endloop
  endfacet
  facet normal 0.0 0.0 -1.0
    outer loop
      vertex 0.0 0.0 0.0
      vertex 0.7071 0.7071 0.0
      vertex 0.0 1.0 0.0
    endloop
  endfacet
  facet normal 0.0 0.0 -1.0
    outer loop
      vertex 0.0 0.0 0.0
      vertex 0.0 1.0 0.0
      vertex -0.7071 0.7071 0.0
    endloop
  endfacet
  facet normal 0.0 0.0 -1.0
    outer loop
      vertex 0.0 0.0 0.0
      vertex -0.7071 0.7071 0.0
      vertex -1.0 0.0 0.0
    endloop
  endfacet
  facet normal 0.0 0.0 -1.0
    outer loop
      vertex 0.0 0.0 0.0
      vertex -1.0 0.0 0.0
      vertex -0.7071 -0.7071 0.0
    endloop
  endfacet
  facet normal 0.0 0.0 -1.0
    outer loop
      vertex 0.0 0.0 0.0
      vertex -0.7071 -0.7071 0.0
      vertex 0.0 -1.0 0.0
    endloop
  endfacet
  facet normal 0.0 0.0 -1.0
    outer loop
      vertex 0.0 0.0 0.0
      vertex 0.0 -1.0 0.0
      vertex 0.7071 -0.7071 0.0
    endloop
  endfacet
  facet normal 0.0 0.0 -1.0
    outer loop
      vertex 0.0 0.0 0.0
      vertex 0.7071 -0.7071 0.0
      vertex 1.0 0.0 0.0
    endloop
  endfacet

  # Боковая поверхность цилиндра
  facet normal 1.0 0.0 0.0
    outer loop
      vertex 1.0 0.0 0.0
      vertex 1.0 0.0 2.0
      vertex 0.7071 0.7071 2.0
    endloop
  endfacet
  facet normal 1.0 0.0 0.0
    outer loop
      vertex 1.0 0.0 0.0
      vertex 0.7071 0.7071 2.0
      vertex 0.7071 0.7071 0.0
    endloop
  endfacet
  facet normal 0.7071 0.7071 0.0
    outer loop
      vertex 0.7071 0.7071 0.0
      vertex 0.7071 0.7071 2.0
      vertex 0.0 1.0 2.0
    endloop
  endfacet
  facet normal 0.7071 0.7071 0.0
    outer loop
      vertex 0.7071 0.7071 0.0
      vertex 0.0 1.0 2.0
      vertex 0.0 1.0 0.0
    endloop
  endfacet
  facet normal 0.0 1.0 0.0
    outer loop
      vertex 0.0 1.0 0.0
      vertex 0.0 1.0 2.0
      vertex -0.7071 0.7071 2.0
    endloop
  endfacet
  facet normal 0.0 1.0 0.0
    outer loop
      vertex 0.0 1.0 0.0
      vertex -0.7071 0.7071 2.0
      vertex -0.7071 0.7071 0.0
    endloop
  endfacet
  facet normal -0.7071 0.7071 0.0
    outer loop
      vertex -0.7071 0.7071 0.0
      vertex -0.7071 0.7071 2.0
      vertex -1.0 0.0 2.0
    endloop
  endfacet
  facet normal -0.7071 0.7071 0.0
    outer loop
      vertex -0.7071 0.7071 0.0
      vertex -1.0 0.0 2.0
      vertex -1.0 0.0 0.0
    endloop
  endfacet
  facet normal -1.0 0.0 0.0
    outer loop
      vertex -1.0 0.0 0.0
      vertex -1.0 0.0 2.0
      vertex -0.7071 -0.7071 2.0
    endloop
  endfacet
  facet normal -1.0 0.0 0.0
    outer loop
      vertex -1.0 0.0 0.0
      vertex -0.7071 -0.7071 2.0
      vertex -0.7071 -0.7071 0.0
    endloop
  endfacet
  facet normal -0.7071 -0.7071 0.0
    outer loop
      vertex -0.7071 -0.7071 0.0
      vertex -0.7071 -0.7071 2.0
      vertex 0.0 -1.0 2.0
    endloop
  endfacet
  facet normal -0.7071 -0.7071 0.0
    outer loop
      vertex -0.7071 -0.7071 0.0
      vertex 0.0 -1.0 2.0
      vertex 0.0 -1.0 0.0
    endloop
  endfacet
  facet normal 0.0 -1.0 0.0
    outer loop
      vertex 0.0 -1.0 0.0
      vertex 0.0 -1.0 2.0
      vertex 0.7071 -0.7071 2.0
    endloop
  endfacet
  facet normal 0.0 -1.0 0.0
    outer loop
      vertex 0.0 -1.0 0.0
      vertex 0.7071 -0.7071 2.0
      vertex 0.7071 -0.7071 0.0
    endloop
  endfacet
  facet normal 0.7071 -0.7071 0.0
    outer loop
      vertex 0.7071 -0.7071 0.0
      vertex 0.7071 -0.7071 2.0
      vertex 1.0 0.0 2.0
    endloop
  endfacet
  facet normal 0.7071 -0.7071 0.0
    outer loop
      vertex 0.7071 -0.7071 0.0
      vertex 1.0 0.0 2.0
      vertex 1.0 0.0 0.0
    endloop
  endfacet

  # Верхняя крышка цилиндра
  facet normal 0.0 0.0 1.0
    outer loop
      vertex 0.0 0.0 2.0
      vertex 1.0 0.0 2.0
      vertex 0.7071 0.7071 2.0
    endloop
  endfacet
  facet normal 0.0 0.0 1.0
    outer loop
      vertex 0.0 0.0 2.0
      vertex 0.7071 0.7071 2.0
      vertex 0.0 1.0 2.0
    endloop
  endfacet
  facet normal 0.0 0.0 1.0
    outer loop
      vertex 0.0 0.0 2.0
      vertex 0.0 1.0 2.0
      vertex -0.7071 0.7071 2.0
    endloop
  endfacet
  facet normal 0.0 0.0 1.0
    outer loop
      vertex 0.0 0.0 2.0
      vertex -0.7071 0.7071 2.0
      vertex -1.0 0.0 2.0
    endloop
  endfacet
  facet normal 0.0 0.0 1.0
    outer loop
      vertex 0.0 0.0 2.0
      vertex -1.0 0.0 2.0
      vertex -0.7071 -0.7071 2.0
    endloop
  endfacet
  facet normal 0.0 0.0 1.0
    outer loop
      vertex 0.0 0.0 2.0
      vertex -0.7071 -0.7071 2.0
      vertex 0.0 -1.0 2.0
    endloop
  endfacet
  facet normal 0.0 0.0 1.0
    outer loop
      vertex 0.0 0.0 2.0
      vertex 0.0 -1.0 2.0
      vertex 0.7071 -0.7071 2.0
    endloop
  endfacet
  facet normal 0.0 0.0 1.0
    outer loop
      vertex 0.0 0.0 2.0
      vertex 0.7071 -0.7071 2.0
      vertex 1.0 0.0 2.0
    endloop
  endfacet
endsolid model 
```
