# Crystalline silicon : computation of the optimal lattice parameter
# Convergence with respect to the number of k points.

ndtset 2

#Optimization of the lattice parameters
optcell 1
ionmov  3
ntime  10
dilatmx 1.05
ecutsm  0.5

#Definition of the k-point grids
kptopt 1          # Option for the automatic generation of k points, taking
                  # into account the symmetry
nshiftk 4
shiftk  0.5 0.5 0.5  # These shifts will be the same for all grids
        0.5 0.0 0.0
        0.0 0.5 0.0
        0.0 0.0 0.5

ngkpt1  2 2 2  
ngkpt2  4 4 4 
#ngkpt3  6 6 6    Not used ! 
#ngkpt4  8 8 8  

getwfk -1         # This is to speed up the calculation, by restarting
                  # from previous wavefunctions, transferred from the old 
                  # to the new k-points.



#Definition of the unit cell
acell 3*10.18          # This is equivalent to   10.18 10.18 10.18
rprim  0.0  0.5  0.5   # FCC primitive vectors (to be scaled by acell)
       0.5  0.0  0.5   
       0.5  0.5  0.0

#Definition of the atom types
ntypat 1          # There is only one type of atom
znucl 14          # The keyword "znucl" refers to the atomic number of the 
                  # possible type(s) of atom. The pseudopotential(s) 
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Silicon.
                         

#Definition of the atoms
natom 2           # There are two atoms
typat 1 1         # They both are of type 1, that is, Silicon.
xred              # This keyword indicate that the location of the atoms
                  # will follow, one triplet of number for each atom
   0.0  0.0  0.0  # Triplet giving the REDUCED coordinate of atom 1.
   1/4  1/4  1/4  # Triplet giving the REDUCED coordinate of atom 2.

#Definition of the planewave basis set
ecut 8.0         # Maximal kinetic energy cut-off, in Hartree

#Definition of the SCF procedure
nstep 10          # Maximal number of SCF cycles
toldfe 1.0d-6     # Will stop when, twice in a row, the difference 
                  # between two consecutive evaluations of total energy 
                  # differ by less than toldfe (in Hartree) 
                  # This value is way too large for most realistic studies of materials
diemac 12.0       # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner
                  # is described in the "dielng" input variable section.
                  # Here, we follow the prescription for bulk silicon.
