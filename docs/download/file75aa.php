# Crystalline aluminum : optimization of the lattice parameter
# at fixed number of k points and broadening.

#Definition of occupation numbers
occopt 4
tsmear 0.05

#Definition of the unit cell
acell 3*7.60           # This is equivalent to   7.60 7.60 7.60
rprim  0.0  0.5  0.5   # FCC primitive vectors (to be scaled by acell)
       0.5  0.0  0.5 
       0.5  0.5  0.0

#Optimization of the lattice parameters
optcell 1
ionmov  3
ntime  10
dilatmx 1.05
ecutsm  0.5

#Definition of the atom types
ntypat 1          # There is only one type of atom
znucl 13          # The keyword "znucl" refers to the atomic number of the 
                  # possible type(s) of atom. The pseudopotential(s) 
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Aluminum
                         

#Definition of the atoms
natom 1           # There is only one atom per cell
typat 1           # This atom is of type 1, that is, Aluminum
xred              # This keyword indicate that the location of the atoms
                  # will follow, one triplet of number for each atom
   0.0  0.0  0.0     # Triplet giving the REDUCED coordinate of atom 1.

#Definition of the planewave basis set
ecut  6.0         # Maximal kinetic energy cut-off, in Hartree

#Exchange-correlation functional
ixc 1             # LDA Teter Pade parametrization

#Definition of the k-point grid
ngkpt 2 2 2       # This is a 2x2x2 FCC grid, based on the primitive vectors
nshiftk 4         # of the reciprocal space. For a FCC real space lattice,
                  # like the present one, it actually corresponds to the
                  # so-called 4x4x4 Monkhorst-Pack grid, if the following shifts
                  # are used :
shiftk 0.5 0.5 0.5
       0.5 0.0 0.0
       0.0 0.5 0.0
       0.0 0.0 0.5

#Definition of the SCF procedure
nstep 10          # Maximal number of SCF cycles
toldfe 1.0d-6     # Will stop when, twice in a row, the difference 
                  # between two consecutive evaluations of total energy 
                  # differ by less than toldfe (in Hartree) 
                  # This value is way too large for most realistic studies of materials
