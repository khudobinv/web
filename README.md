```stl
solid LowPolyPenis
  # Основание (круг из треугольников)
  facet normal 0 0 -1
    outer loop
      vertex 0 0 0
      vertex 1 0 0
      vertex 0.707 0.707 0
    endloop
  endfacet
  facet normal 0 0 -1
    outer loop
      vertex 0 0 0
      vertex 0.707 0.707 0
      vertex 0 1 0
    endloop
  endfacet
  facet normal 0 0 -1
    outer loop
      vertex 0 0 0
      vertex 0 1 0
      vertex -0.707 0.707 0
    endloop
  endfacet
  facet normal 0 0 -1
    outer loop
      vertex 0 0 0
      vertex -0.707 0.707 0
      vertex -1 0 0
    endloop
  endfacet
  facet normal 0 0 -1
    outer loop
      vertex 0 0 0
      vertex -1 0 0
      vertex -0.707 -0.707 0
    endloop
  endfacet
  facet normal 0 0 -1
    outer loop
      vertex 0 0 0
      vertex -0.707 -0.707 0
      vertex 0 -1 0
    endloop
  endfacet
  facet normal 0 0 -1
    outer loop
      vertex 0 0 0
      vertex 0 -1 0
      vertex 0.707 -0.707 0
    endloop
  endfacet
  facet normal 0 0 -1
    outer loop
      vertex 0 0 0
      vertex 0.707 -0.707 0
      vertex 1 0 0
    endloop
  endfacet

  # Боковые грани ствола (до высоты 3)
  facet normal 0.707 0 0
    outer loop
      vertex 1 0 0
      vertex 0.707 0.707 0
      vertex 0.707 0.707 3
    endloop
  endfacet
  facet normal 0.707 0 0
    outer loop
      vertex 1 0 0
      vertex 0.707 0.707 3
      vertex 1 0 3
    endloop
  endfacet
  facet normal 0 0.707 0
    outer loop
      vertex 0 1 0
      vertex 0.707 0.707 0
      vertex 0.707 0.707 3
    endloop
  endfacet
  facet normal 0 0.707 0
    outer loop
      vertex 0 1 0
      vertex 0.707 0.707 3
      vertex 0 1 3
    endloop
  endfacet
  facet normal -0.707 0 0
    outer loop
      vertex -1 0 0
      vertex -0.707 0.707 0
      vertex -0.707 0.707 3
    endloop
  endfacet
  facet normal -0.707 0 0
    outer loop
      vertex -1 0 0
      vertex -0.707 0.707 3
      vertex -1 0 3
    endloop
  endfacet

  # Головка (сфера на конце, упрощённая)
  facet normal 0 0 1
    outer loop
      vertex 1 0 3
      vertex 0.707 0.707 3
      vertex 0.5 0.5 4
    endloop
  endfacet
  facet normal 0 0 1
    outer loop
      vertex 0.707 0.707 3
      vertex 0 1 3
      vertex 0.5 0.5 4
    endloop
  endfacet
  facet normal 0 0 1
    outer loop
      vertex 0 1 3
      vertex -0.707 0.707 3
      vertex -0.5 0.5 4
    endloop
  endfacet
  facet normal 0 0 1
    outer loop
      vertex -0.707 0.707 3
      vertex -1 0 3
      vertex -0.5 0 4
    endloop
  endfacet

endsolid LowPolyPenis
```
