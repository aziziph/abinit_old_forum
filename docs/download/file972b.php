optcell 0

prtwf 1
getwfk -1
prtden 0

ecut 15.0 #63.0
ecutsm 3.0
dilatmx 1.2
ixc 23

ndtset 19
acell1  3*7.45
acell2  3*7.47
acell3  3*7.49
acell4  3*7.51
acell5  3*7.5323692530
acell6  3*7.55
acell7  3*7.57
acell8  3*7.59
acell9  3*7.61
acell10 2*7.5323692530 7.43
acell11 2*7.5323692530 7.45
acell12 2*7.5323692530 7.47
acell13 2*7.5323692530 7.49
acell14 2*7.5323692530 7.51
acell15 2*7.5323692530 7.5323692530
acell16 2*7.5323692530 7.55
acell17 2*7.5323692530 7.57
acell18 2*7.5323692530 7.59
acell19 2*7.5323692530 7.61

rprim  1 0 0
       0 1 0
       0 0 1

#Definition of the atom types
ntypat 3
znucl 56 22 8

#Definition of the atoms
natom 5
typat 1*1 1*2 3*3
xred
  0.0 0.0 0.0
  0.5 0.5 0.5
  0.0 0.5 0.5
  0.5 0.0 0.5
  0.5 0.5 0.0
#Definition of the k-point grid
kptopt 1
ngkpt  8 8 8
nshiftk 1
shiftk 0.5 0.5 0.5

#Definition of the SCF procedure
nstep 35
toldfe 1.0d-8

diemac 12.0

#Local variables:
#  compile-command: "submit bm -exec perovskite-B1112.nqs -n 4 -J `basename $PWD`-B1112"
#End:

