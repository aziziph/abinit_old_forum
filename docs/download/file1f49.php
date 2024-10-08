# Crystalline silicon : computation of the optimal lattice parameter
# Convergence with respect to the number of k points.

#ndtset 1

#Optimization of the lattice parameters
optcell 1
ionmov  3
ntime  10
dilatmx 1.25
ecutsm  0.5

#Definition of the k-point grids
#kptopt 1          # Option for the automatic generation of k points, taking
                  # into account the symmetry
#nshiftk 4
#shiftk  1.0 1.0 1.0  # These shifts will be the same for all grids
#        1.0 0.0 0.0
#        0.0 1.0 0.0
#        0.0 0.0 1.0

ngkpt  4 4 4  

getwfk -1         # This is to speed up the calculation, by restarting
                  # from previous wavefunctions, transferred from the old 
                  # to the new k-points.



#Definition of the unit cell
chkprim 0
acell 3*6.73          
rprim  1.0  0.0  0.0   # FCC primitive vectors (to be scaled by acell)
       0.0  1.0  0.0   
       0.0  0.0  1.0

#Definition of the atom types
ntypat 1          # There is only one type of atom
znucl 6          # The keyword "znucl" refers to the atomic number of the 
                  # possible type(s) of atom. The pseudopotential(s) 
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Silicon.
                         

#Definition of the atoms
natom 8           # There are two atoms
typat 8*1         # They both are of type 1, that is, Silicon.
xred              # This keyword indicate that the location of the atoms
                  # will follow, one triplet of number for each atom
   0.0  0.0  0.0  
   0.25 0.25 0.25 
   0.0  0.5  0.5  
   0.75 0.25 0.75 
   0.5  0.0  0.5  
   0.25 0.75 0.75 
   0.5  0.5  0.0  
   0.75 0.75 0.25 

#Definition of the planewave basis set
ecut 20.0         # Maximal kinetic energy cut-off, in Hartree

#Definition of the SCF procedure
nstep 100          # Maximal number of SCF cycles
toldfe 1.0d-6     # Will stop when, twice in a row, the difference 
                  # between two consecutive evaluations of total energy 
                  # differ by less than toldfe (in Hartree) 
                  # This value is way too large for most realistic studies of materials
#diemac 12.0       # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner
                  # is described in the "dielng" input variable section.
                  # Here, we follow the prescription for bulk silicon.
# add to conserve old < 6.7.2 behavior for calculating forces at each SCF step
 optforces 1

