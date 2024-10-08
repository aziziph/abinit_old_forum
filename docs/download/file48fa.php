# turn on calculation of the electron-phonon quantities
elphflag 1

# Path in reciprocal space along which the phonon linewidths
#  and band structure will be calculated
nqpath 7
qpath
 0.0 0.0 0.0
 1/2 1/2 0.0
 1   1   1
 1/2 1/2 1/2
 1/2 1/2 0.0
 1/2 3/4 1/4
 1/2 1/2 1/2

# Coulomb pseudopotential parameter
mustar 0.136

# Minimalistic qpoint grid
ngqpt 2 2 2

#  impose acoustic sum rule in a symmetric way
asr 2 
dipdip 0

#  bravais lattice necessary
brav 1

# qpt grid
nqshft 1
q1shft 0.0 0.0 0.0
# 
ifcflag 1
ifcana 1
#  ifc for all atoms?
natifc 0
atifc 1 2 3

#  print dielectric matrix with freq dependence
dieflag 0

#  print out eigenvectors and symmetrize dyn matrix
eivec 1

#Wavevector list number 1 (Reduced coordinates and normalization factor)
nph1l 1
qph1l
              0.00000000E+00  0.00000000E+00  0.00000000E+00 1

# This line added when defaults were changed (v5.3) to keep the previous, old behaviour
  symdynmat 0
