```stl
solid LowPolyModel
  # Основание цилиндра (круг из треугольников)
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

  # Боковые грани цилиндра
  facet normal 0.707 0 0
    outer loop
      vertex 1 0 0
      vertex 0.707 0.707 0
      vertex 0.707 0.707 2
    endloop
  endfacet
  facet normal 0.707 0 0
    outer loop
      vertex 1 0 0
      vertex 0.707 0.707 2
      vertex 1 0 2
    endloop
  endfacet

  # Верхушка (конус)
  facet normal 0 0 1
    outer loop
      vertex 0.707 0.707 2
      vertex 0 1 2
      vertex 0 0 3
    endloop
  endfacet```
