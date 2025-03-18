```stl
solid ColoredRealisticDickLowPoly
  # Основание (8-угольник)
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

  # Ствол (высота до 4)
  facet normal 0.707 0 0
    outer loop
      vertex 1 0 0
      vertex 0.707 0.707 0
      vertex 0.707 0.707 4
    endloop
  endfacet
  facet normal 0.707 0 0
    outer loop
      vertex 1 0 0
      vertex 0.707 0.707 4
      vertex 1 0 4
    endloop
  endfacet
  facet normal 0 0.707 0
    outer loop
      vertex 0 1 0
      vertex 0.707 0.707 0
      vertex 0.707 0.707 4
    endloop
  endfacet
  facet normal 0 0.707 0
    outer loop
      vertex 0 1 0
      vertex 0.707 0.707 4
      vertex 0 1 4
    endloop
  endfacet
  facet normal -0.707 0 0
    outer loop
      vertex -1 0 0
      vertex -0.707 0.707 0
      vertex -0.707 0.707 4
    endloop
  endfacet
  facet normal -0.707 0 0
    outer loop
      vertex -1 0 0
      vertex -0.707 0.707 4
      vertex -1 0 4
    endloop
  endfacet
  facet normal 0 -0.707 0
    outer loop
      vertex 0 -1 0
      vertex 0.707 -0.707 0
      vertex 0.707 -0.707 4
    endloop
  endfacet
  facet normal 0 -0.707 0
    outer loop
      vertex 0 -1 0
      vertex 0.707 -0.707 4
      vertex 0 -1 4
    endloop
  endfacet

  # Головка (закрытая и плавная, до z=5)
  facet normal 0 0 1
    outer loop
      vertex 1 0 4
      vertex 0.707 0.707 4
      vertex 0.9 0.6 4.5
    endloop
  endfacet
  facet normal 0 0 1
    outer loop
      vertex 0.707 0.707 4
      vertex 0 1 4
      vertex 0.6 0.9 4.5
    endloop
  endfacet
  facet normal 0 0 1
    outer loop
      vertex 0 1 4
      vertex -0.707 0.707 4
      vertex -0.6 0.9 4.5
    endloop
  endfacet
  facet normal 0 0 1
    outer loop
      vertex -0.707 0.707 4
      vertex -1 0 4
      vertex -0.9 0.6 4.5
    endloop
  endfacet
  facet normal 0 0 1
    outer loop
      vertex 0.9 0.6 4.5
      vertex 0.6 0.9 4.5
      vertex 0 0 5
    endloop
  endfacet
  facet normal 0 0 1
    outer loop
      vertex 0.6 0.9 4.5
      vertex -0.6 0.9 4.5
      vertex 0 0 5
    endloop
  endfacet
  facet normal 0 0 1
    outer loop
      vertex -0.6 0.9 4.5
      vertex -0.9 0.6 4.5
      vertex 0 0 5
    endloop
  endfacet

endsolid ColoredRealisticDickLowPoly
```
