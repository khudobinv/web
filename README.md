```stl
solid figure
  # Цилиндр (основная часть)
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

  # Конус (верхняя часть)
  facet normal 0.8944 0.0 0.4472
    outer loop
      vertex 1.0 0.0 2.0
      vertex 0.0 0.0 4.0
      vertex 0.7071 0.7071 2.0
    endloop
  endfacet
  facet normal 0.6324 0.6324 0.4472
    outer loop
      vertex 0.7071 0.7071 2.0
      vertex 0.0 0.0 4.0
      vertex 0.0 1.0 2.0
    endloop
  endfacet
  facet normal 0.0 0.8944 0.4472
    outer loop
      vertex 0.0 1.0 2.0
      vertex 0.0 0.0 4.0
      vertex -0.7071 0.7071 2.0
    endloop
  endfacet
  facet normal -0.6324 0.6324 0.4472
    outer loop
      vertex -0.7071 0.7071 2.0
      vertex 0.0 0.0 4.0
      vertex -1.0 0.0 2.0
    endloop
  endfacet
  facet normal -0.8944 0.0 0.4472
    outer loop
      vertex -1.0 0.0 2.0
      vertex 0.0 0.0 4.0
      vertex -0.7071 -0.7071 2.0
    endloop
  endfacet
  facet normal -0.6324 -0.6324 0.4472
    outer loop
      vertex -0.7071 -0.7071 2.0
      vertex 0.0 0.0 4.0
      vertex 0.0 -1.0 2.0
    endloop
  endfacet
  facet normal 0.0 -0.8944 0.4472
    outer loop
      vertex 0.0 -1.0 2.0
      vertex 0.0 0.0 4.0
      vertex 0.7071 -0.7071 2.0
    endloop
  endfacet
  facet normal 0.6324 -0.6324 0.4472
    outer loop
      vertex 0.7071 -0.7071 2.0
      vertex 0.0 0.0 4.0
      vertex 1.0 0.0 2.0
    endloop
  endfacet

  # Левая сфера
  facet normal -0.7071 0.0 -0.7071
    outer loop
      vertex -1.5 0.0 0.0
      vertex -1.0 0.0 -0.5
      vertex -1.0 0.5 0.0
    endloop
  endfacet
  facet normal -0.7071 0.0 -0.7071
    outer loop
      vertex -1.5 0.0 0.0
      vertex -1.0 -0.5 0.0
      vertex -1.0 0.0 -0.5
    endloop
  endfacet
  facet normal -0.7071 0.7071 0.0
    outer loop
      vertex -1.5 0.0 0.0
      vertex -1.0 0.5 0.0
      vertex -1.0 0.0 0.5
    endloop
  endfacet
  facet normal -0.7071 -0.7071 0.0
    outer loop
      vertex -1.5 0.0 0.0
      vertex -1.0 0.0 0.5
      vertex -1.0 -0.5 0.0
    endloop
  endfacet

  # Правая сфера
  facet normal 0.7071 0.0 -0.7071
    outer loop
      vertex 1.5 0.0 0.0
      vertex 1.0 0.0 -0.5
      vertex 1.0 0.5 0.0
    endloop
  endfacet
  facet normal 0.7071 0.0 -0.7071
    outer loop
      vertex 1.5 0.0 0.0
      vertex 1.0 -0.5 0.0
      vertex 1.0 0.0 -0.5
    endloop
  endfacet
  facet normal 0.7071 0.7071 0.0
    outer loop
      vertex 1.5 0.0 0.0
      vertex 1.0 0.5 0.0
      vertex 1.0 0.0 0.5
    endloop
  endfacet
  facet normal 0.7071 -0.7071 0.0
    outer loop
      vertex 1.5 0.0 0.0
      vertex 1.0 0.0 0.5
      vertex 1.0 -0.5 0.0
    endloop
  endfacet
endsolid figure 
```
