!the input file for the anaddb code

  elaflag  3  !the flag for the elastic constant
piezoflag  3  !the flag for the piezoelectric constant
instrflag  1  !the flag for the internal strain tensor

!the effective charge part
   chneut  1  !enforce Born effective charge neutrality
# This line added when defaults were changed (v5.3) to keep the previous, old behaviour
  asr 0
  symdynmat 0


#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = anaddb
#%% test_chain = telast_2.in, telast_3.in
#%% input_ddb = telast_2o_DS3_DDB
#%% [files]
#%% files_to_test = 
#%%   telast_3.out, tolnlines=  0, tolabs=  0.000e+00, tolrel=  0.000e+00, fld_options = -easy
#%% psp_files =  13al.pspnc, 33as.pspnc
#%% [paral_info]
#%% max_nprocs = 1
#%% [extra_info]
#%% author = 
#%% keywords =  NC, DFPT
#%% description = 
#%%<END TEST_INFO>
