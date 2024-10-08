ndtset      3
# Silicon structure
acell     10.263  10.263  10.263
rprim      0.00   0.50   0.50
           0.50   0.00   0.50
           0.50   0.50   0.00
natom      2
xred      0.00   0.00   0.00
          0.25   0.25   0.25
ntypat     1
typat      1      1
znucl     14.00
symmorphi      0

# Plane wave basis
ecut     24     #This should give a well converged GS density and wfn
nstep    100    #

#kpoint set
ngkpt1      4 4 4
nshiftk1    1     #wannier90 library can only handle one k-mesh
shiftk1     0.00   0.00   0.00  # default shift

# Self-consistent run to get the density
iscf1     5
tolvrs1   1.00d-10
nband1    5
prtden1   1
kptopt1      1
enunit1      2
diemac1      12.0

# Second dataset: NSCF
prtvol2 1
iscf2 -2
nband2 14
nstep2 200
tolwfr2  1.e-10
getwfk2  1
getden2 1   ! Usual file handling data
prtden2 1
kptopt2 1       # Option for the automatic generation of k points
ngkpt2 4 4 4 
nshiftk2 1
shiftk2 0.0 0.0 0.0

# Third: Wannier90
prtvol3 1
iscf3 -2
nband3 14
nstep3 0
tolwfr3 1.e-10
getwfk3 2
getden3 2   # Usual file handling data
prtwant3 2
istwfk3 64*1
kptopt3 3       # Option for the automatic generation of k points
ngkpt3 4 4 4
nshiftk3 1
shiftk3 0.0 0.0 0.0
w90prtunk3 1
w90iniprj3 2
