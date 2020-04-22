
#ifndef __platform__
    #define __platform__ 1

    #ifdef __windows__
      #include "platform/winapi.h"
    #endif

    #include "platform/khrplatform.h"
    #include "platform/opengl.h"
#endif
