# H2 molecule in a big box
#
# In this input file, the location of the information on this or that line
# is not important : a keyword is located by the parser, and the related
# information should follow. 
# The "#" symbol indicates the beginning of a comment : the remaining
# of the line will be skipped.

#Definition of the unit cell
acell 10 10 10    # The keyword "acell" refers to the
                  # lengths of the primitive vectors (in Bohr)
#rprim 1 0 0  0 1 0  0 0 1 # This line, defining orthogonal primitive vectors,
                           # is commented, because it is precisely the default value of rprim

#Definition of the atom types
ntypat 1          # There is only one type of atom
znucl 1           # The keyword "znucl" refers to the atomic number of the 
                  # possible type(s) of atom. The pseudopotential(s) 
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Hydrogen.
                         

#Definition of the atoms
natom 2           # There are two atoms
typat 1 1         # They both are of type 1, that is, Hydrogen
xcart             # This keyword indicates that the location of the atoms
                  # will follow, one triplet of number for each atom
  -0.7 0.0 0.0    # Triplet giving the cartesian coordinates of atom 1, in Bohr
   0.7 0.0 0.0    # Triplet giving the cartesian coordinates of atom 2, in Bohr

#Definition of the planewave basis set
ecut 10.0         # Maximal plane-wave kinetic energy cut-off, in Hartree
pawecutdg 40

pawspnorb 1  # spin-orbit, non-collinear magnetism
nspden 4

#Definition of the k-point grid
kptopt 0          # Enter the k points manually 
nkpt 1            # Only one k point is needed for isolated system,
                  # taken by default to be 0.0 0.0 0.0

#Definition of the SCF procedure
#so_psp 1          # spin-orbital effects
nstep 10          # Maximal number of SCF cycles
toldfe 1.0d-6     # Will stop when, twice in a row, the difference 
                  # between two consecutive evaluations of total energy 
                  # differ by less than toldfe (in Hartree) 
                  # This value is way too large for most realistic studies of materials
diemac 2.0        # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner
                  # is described in the "dielng" input variable section.
                  # Here, we follow the prescriptions for molecules 
                  # in a big box

# add to conserve old < 6.7.2 behavior for calculating forces at each SCF step
 optforces 1

