tnlo_4.ddb.out
linear + nonlinear response calculation of Li2I2O6
3
tnlo_2o_DS4_DDB
tnlo_3o_DS4_DDB
tnlo_2o_DS5_DDB


## After modifying the following section, one might need to regenerate the pickle database with runtests.py -r
#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = mrgddb
#%% test_chain = tnlo_2.in, tnlo_3.in, tnlo_4.in, tnlo_5.in
#%% [files]
#%% files_to_test = 
#%%   tnlo_4.ddb.out, tolnlines=  0, tolabs=  1.143e-09, tolrel=  3.000e-09, fld_options=-medium
#%% [paral_info]
#%% max_nprocs = 1
#%% [extra_info]
#%% authors = M. Veithen, P. Ghosez
#%% keywords = 
#%% description = Anaddb Input file
#%%<END TEST_INFO>
