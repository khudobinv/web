solid DetailedPenis
  # Основание (12-угольник вместо 8-угольника)
  facet normal 0 0 -1
    outer loop
      vertex 0 0 0
      vertex 1 0 0
      vertex 0.866 0.5 0
    endloop
  endfacet
  facet normal 0 0 -1
    outer loop
      vertex 0 0 0
      vertex 0.866 0.5 0
      vertex 0.5 0.866 0
    endloop
  endfacet
  facet normal 0 0 -1
    outer loop
      vertex 0 0 0
      vertex 0.5 0.866 0
      vertex 0 1 0
    endloop
  endfacet
  facet normal 0 0 -1
    outer loop
      vertex 0 0 0
      vertex 0 1 0
      vertex -0.5 0.866 0
    endloop
  endfacet
  facet normal 0 0 -1
    outer loop
      vertex 0 0 0
      vertex -0.5 0.866 0
      vertex -0.866 0.5 0
    endloop
  endfacet
  facet normal 0 0 -1
    outer loop
      vertex 0 0 0
      vertex -0.866 0.5 0
      vertex -1 0 0
    endloop
  endfacet
  facet normal 0 0 -1
    outer loop
      vertex 0 0 0
      vertex -1 0 0
      vertex -0.866 -0.5 0
    endloop
  endfacet
  facet normal 0 0 -1
    outer loop
      vertex 0 0 0
      vertex -0.866 -0.5 0
      vertex -0.5 -0.866 0
    endloop
  endfacet
  facet normal 0 0 -1
    outer loop
      vertex 0 0 0
      vertex -0.5 -0.866 0
      vertex 0 -1 0
    endloop
  endfacet
  facet normal 0 0 -1
    outer loop
      vertex 0 0 0
      vertex 0 -1 0
      vertex 0.5 -0.866 0
    endloop
  endfacet
  facet normal 0 0 -1
    outer loop
      vertex 0 0 0
      vertex 0.5 -0.866 0
      vertex 0.866 -0.5 0
    endloop
  endfacet
  facet normal 0 0 -1
    outer loop
      vertex 0 0 0
      vertex 0.866 -0.5 0
      vertex 1 0 0
    endloop
  endfacet

  # Боковые грани ствола (до высоты 3, с промежуточным слоем на z=1.5)
  facet normal 0.866 0 0
    outer loop
      vertex 1 0 0
      vertex 0.866 0.5 0
      vertex 0.866 0.5 1.5
    endloop
  endfacet
  facet normal 0.866 0 0
    outer loop
      vertex 1 0 0
      vertex 0.866 0.5 1.5
      vertex 1 0 1.5
    endloop
  endfacet
  facet normal 0.866 0 0
    outer loop
      vertex 1 0 1.5
      vertex 0.866 0.5 1.5
      vertex 0.866 0.5 3
    endloop
  endfacet
  facet normal 0.866 0 0
    outer loop
      vertex 1 0 1.5
      vertex 0.866 0.5 3
      vertex 1 0 3
    endloop
  endfacet

  # Головка (более плавная, с несколькими слоями)
  facet normal 0 0 1
    outer loop
      vertex 1 0 3
      vertex 0.866 0.5 3
      vertex 0.7 0.4 3.5
    endloop
  endfacet
  facet normal 0 0 1
    outer loop
      vertex 0.866 0.5 3
      vertex 0.5 0.866 3
      vertex 0.4 0.7 3.5
    endloop
  endfacet
  facet normal 0 0 1
    outer loop
      vertex 0.5 0.866 3
      vertex 0 1 3
      vertex 0 0.8 3.5
    endloop
  endfacet
  facet normal 0 0 1
    outer loop
      vertex 0 1 3
      vertex -0.5 0.866 3
      vertex -0.4 0.7 3.5
    endloop
  endfacet
  facet normal 0 0 1
    outer loop
      vertex 1 0 3
      vertex 0.7 0.4 3.5
      vertex 0.5 0 4
    endloop
  endfacet
  facet normal 0 0 1
    outer loop
      vertex 0.866 0.5 3
      vertex 0.7 0.4 3.5
      vertex 0.5 0 4
    endloop
  endfacet

endsolid DetailedPenis
