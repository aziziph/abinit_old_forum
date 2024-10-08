# Crystalline aluminum : optimization of the lattice parameter
#
# Convergence with respect to k points.

ndtset 4
getwfk -1

#Definition of occupation numbers
occopt 4
tsmear 0.05

#Definition of the k-point grids
nshiftk 4
shiftk  0.5 0.5 0.5  # These shifts will be the same for all grids
        0.5 0.0 0.0
        0.0 0.5 0.0
        0.0 0.0 0.5

ngkpt1  2 2 2 
ngkpt2  4 4 4 
ngkpt3  6 6 6 
ngkpt4  8 8 8 

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
                  # to the type(s) of atom. Here, the only type is Aluminum.
                         

#Definition of the atoms
natom 1           # There is only one atom per cell
typat 1           # This atom is of type 1, that is, Aluminum.
xred              # This keyword indicate that the location of the atoms
                  # will follow, one triplet of number for each atom
   0.0  0.0  0.0     # Triplet giving the REDUCED coordinate of atom 1.

#Exchange-correlation functional
ixc 1             # LDA Teter Pade parametrization

#Definition of the planewave basis set
ecut  6.0         # Maximal kinetic energy cut-off, in Hartree

#Definition of the SCF procedure
nstep 10          # Maximal number of SCF cycles
toldfe 1.0d-6     # Will stop when, twice in a row, the difference 
                  # between two consecutive evaluations of total energy 
                  # differ by less than toldfe (in Hartree) 
                  # This value is way too large for most realistic studies of materials
