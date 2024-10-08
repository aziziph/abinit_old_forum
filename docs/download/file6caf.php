# =======================================
# Input for PAW1 tutorial
# Diamond at experimental volume
# =======================================

#Output of the total DOS
 #prtdos 1

#Output of the projected DOS (with PAW contribs)
 prtdos 3  
#pawprtdos 1
# natsph 1 iatsph 1 ratsph 1.5


#Cell and atoms definition
 acell 6.2551538204E+00  1.0085208902E+01  5.4171221142E+01 Bohr
 #rprim 0.0 1/2 1/2
  #     1/2 0.0 1/2
   #    1/2 1/2 0.0
angdeg 90 90 90
 ntypat 5  
natom 28  
typat 8*2 8*1 3 4 3 3 5 3 4 5 3 5 3 3   
 xangst 
1.6550709999E+00  2.6582659999E+00  9.5467939991E-01
                       1.6658199175E+00  2.5518988393E+00  6.6736939424E+00
                      -2.9382909999E-05 -1.0150530000E-02  1.9119389999E+00
                       1.3916655218E-02 -1.3378243470E-01  7.6840511007E+00
                       3.8592964399E-03  2.5817060804E+00  3.8398012061E+00
                       2.5659125802E-02  2.5120315933E+00  9.5201554567E+00
                       1.6589357293E+00 -1.0266257183E-01  4.7826159937E+00
                       1.7010231221E+00 -1.9016788601E-01  1.0617738595E+01
                       1.6550309999E+00  4.6798240002E+00  9.5651260012E-01
                       1.6661807221E+00  4.5786135311E+00  6.7238466549E+00
                       1.1149619999E-05  2.0114609998E+00  1.9100999999E+00
                       8.9136839951E-03  1.8960849706E+00  7.6235307087E+00
                       3.1369895335E-03  4.5923107540E+00  3.8527400839E+00
                       5.0728489338E-02  4.5448472200E+00  9.6341803124E+00
                       1.6583568335E+00  1.9210523588E+00  4.7779469629E+00
                       1.6733861977E+00  1.7546036471E+00  1.0394066862E+01
                       4.6469099294E-01  1.3138143210E-01  1.5213762719E+01
                       1.0014239961E+00  1.0775685616E+00  1.5189606909E+01
                       1.8201695561E+00  1.0108372532E+00  1.5911762608E+01
                       3.0920627800E-01  1.8544745784E+00  1.5526548496E+01
                       1.4759294211E+00  1.3066691759E+00  1.3839168029E+01
                       1.0076296022E+00  7.8692245686E-01  1.3102262268E+01
                       1.7754141654E+00  2.5866215968E+00  1.3393805494E+01
                       1.7935007814E+00  2.8547094036E+00  1.2149554514E+01
                       1.9062964242E+00  3.8463937442E+00  1.1835984393E+01
                       2.1267769940E+00  3.4935513321E+00  1.4399880218E+01
                       1.4989266447E+00  3.4808510010E+00  1.5193723820E+01
                       2.2057834541E+00  4.4307307736E+00  1.4021055714E+01
 znucl 30 8 1 6 7  
#nband 6

#Basis definitions
 ecut 45
 #ecutsm 0.5
 #pawecutdg 24.

#SCF cycle parameters
 toldfe 5.0d-7 
#nbdbuf 2  #nbdbuf:does not take care of empty bands
 nstep 1000

#K-points and sym
 nsym 1       
 occopt 4
  tsmear 0.02
 ngkpt 4 2 1
 nshiftk 2
 shiftk 0.5 0.0 0.0
         0.0 0.5 0.0

#I/O parameters
 optforces 1 
#optstress 1
 prtwf 0 
prtden 0 
prteig 0


#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% [files]
#%% files_to_test = 
#%%   tpaw1_4.out, tolnlines=  0, tolabs=  0.000e+00, tolrel=  0.000e+00, fld_options = -easy
#%% psp_files =  6c.lda.atompaw
#%% [paral_info]
#%% max_nprocs = 4
#%% [extra_info]
#%% authors = 
#%% keywords = PAW
#%% description = 
#%%<END TEST_INFO>
